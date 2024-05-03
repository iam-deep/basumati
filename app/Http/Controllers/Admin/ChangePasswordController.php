<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Deep\FormTool\Core\Doc;
use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use Deep\FormTool\Core\Auth;

class ChangePasswordController extends AdminController
{
    // Required for Form Tool
    public $title = 'Change Password';
    public $route = 'change-password';

    public function setup()
    {
        $model = new DataModel();
        $model->db('users', 'userId');

        Doc::create($this, $model, function (BluePrint $input) {
            $user = Auth::user();

            $input->password('current_password', 'Current Password')->required()->validations([
                function ($attribute, $value, $fail) use ($user) {
                    if (! \Hash::check($value, $user->password)) {
                        return $fail('The Current Password is incorrect.');
                    }
                }
            ]);
            $input->password('password', 'New Password')->required()->validations('min:8');
            $input->password('password_confirmation', 'Confirm Password')->required()->validations('same:password');
        })->saveOnly('password')->actionLog(false);
    }

    public function index(Request $request)
    {
        $this->setup();

        $data['title'] = $this->title;

        $id = Auth::user()->userId;

        $data['page'] = Doc::getCrud()->edit($id);

        return $this->render('form-tool::form.index', $data);
    }

    public function update(Request $request, $id = null)
    {
        $this->setup();

        // Let's prevent if someone wants to change password of other user
        $id = Auth::user()->userId;
        return Doc::getCrud()->update($id);
    }
}
