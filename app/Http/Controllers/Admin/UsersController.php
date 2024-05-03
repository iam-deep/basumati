<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
//use App\Models\Admin\UsersModel;

use Deep\FormTool\Core\Doc;
use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use Deep\FormTool\Core\Auth;
use App\Http\InputTypes\StatusType;

class UsersController extends AdminController
{
    // Required for Form Tool
    public $title = 'Users';
    public $route = 'users';
    public $singularTitle = 'User';

    protected $crud = null;

    protected function setup()
    {
        $model = new DataModel();
        $model->db('users', 'userId');

        $this->crud = Doc::create($this, $model, function (BluePrint $input) {
            $input->text('name')->required();
            $input->select('groupId', 'Group')->required()->options('user_groups.groupId.groupName');
            $input->text('email')->required()->unique()->validations('email');
            $input->password('password')->required()->validations('min:8');
            $input->custom(StatusType::class, 'status');
        });
    }

    private function modifyEdit($id)
    {
        // You can't simply change password and status of yourself
        if (Auth::user()->userId == $id) {
            $this->crud->modify(function ($input) {
                $input->remove('password');
                $input->remove('status');
            });
        } else {
            $this->crud->modify(function ($input) {
                $input->modify('password')->required(false)->help("Leave the password blank, if you don't want to change");
            });
        }
    }

    public function bulkAction(Request $request)
    {
        $this->setup();

        return $this->crud->bulkAction(function ($id, $action) {
            if ($action == 'delete') {
                $response = $this->checkBeforeDelete($id);
                if ($response === true) {
                    return true;
                } else {
                    return false;
                }
            }

            return true;
        });
    }

    public function edit(Request $request, $id = null)
    {
        $this->setup();

        $data['title'] = 'Edit '.$this->singularTitle;

        $this->modifyEdit($id);

        $data['page'] = $this->crud->edit($id);

        return $this->render('form-tool::form.index', $data);
    }

    public function update(Request $request, $id = null)
    {
        $this->setup();
        $this->modifyEdit($id);

        $deletedAt = 'deletedAt';
        $metaColumns = \config('form-tool.table_meta_columns');
        if (isset($metaColumns['deletedAt']) && \trim($metaColumns['deletedAt'])) {
            $deletedAt = $metaColumns['deletedAt'];
        }

        $data = $request->post();
        if (isset($data['groupId'])) {
            // Let's prevent Admin or other users to change Administrator group if we have only one Administrator
            $oldData = DB::table('users')->whereNull($deletedAt)->where('userId', $id)->first();
            if (! $oldData) {
                return back()->with('error', 'User not found!');
            }

            if ($oldData->groupId != $data['groupId']) {
                // Let's assume that the first row in the user_groups table is the Administrator group
                $adminGroup = DB::table('user_groups')->whereNull($deletedAt)->orderBy('groupId', 'asc')->first();
                if (! $adminGroup) {
                    return back()->with('error', 'Administrator user group not found!');
                }

                if ($oldData->groupId == $adminGroup->groupId) {
                    $users = DB::table('users')->whereNull($deletedAt)->where('groupId', $adminGroup->groupId)->count();
                    if ($users <= 1) {
                        return back()->with('error', "You need to add or assign someone as Administrator to change this user's group!");
                    }
                }
            }
        }

        return $this->crud->update($id);
    }

    public function destroy(Request $request, $id = null)
    {
        $this->setup();

        $response = $this->checkBeforeDelete($id);
        if ($response !== true) {
            return $response;
        }

        return $this->crud->delete($id);
    }

    private function checkBeforeDelete($id)
    {
        if (Auth::user()->userId == $id) {
            return back()->with('error', 'Oops!! You cannot delete yourself!');
        }

        $deletedAt = 'deletedAt';
        $metaColumns = \config('form-tool.table_meta_columns');
        if (isset($metaColumns['deletedAt']) && \trim($metaColumns['deletedAt'])) {
            $deletedAt = $metaColumns['deletedAt'];
        }

        // We need to prevent deleting all the administrator users
        // Let's assume that the first row in the user_groups table is the Administrator group
        $adminGroup = DB::table('user_groups')->whereNull($deletedAt)->orderBy('groupId', 'asc')->first();
        if (! $adminGroup) {
            return back()->with('error', 'Administrator user group not found!');
        }

        $user = DB::table('users')->whereNull($deletedAt)->where('userId', $id)->first();
        if (! $user) {
            return back()->with('error', 'User not found!');
        }

        // Is user belongs to Administrator's user group
        if ($user->groupId == $adminGroup->groupId) {
            // Count number of users with administrator's group
            $users = DB::table('users')->whereNull($deletedAt)->where('groupId', $adminGroup->groupId)->count();
            if ($users <= 1) {
                return back()->with('error', 'You need to add one more Administrator to delete this Administrator user!');
            }
        }

        return true;
    }
}
