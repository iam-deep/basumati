<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Deep\FormTool\Core\Doc;
use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use App\Http\InputTypes\StatusType;
use App\Http\InputTypes\YesNoCheckbox;
use App\Models\Admin\DemoModel;

class ClientsController extends AdminController
{
    // Required for Form Tool
    public $title = 'Clients';
    public $route = 'clients';
    public $singularTitle = 'Clients';

    protected $crud = null;

    public function setup()
    {
        $model = new DataModel();
        $model->db('clients', 'clientID');

        $this->crud = Doc::create($this, $model, function (BluePrint $input) {
            $input->text('title')->required();

            $input->image('images');
            $input->number('sortOrder', 'Sort Order');
            $input->select('status')->noFirst()->options([
                1 => 'Active',
                0 => 'Inactive'
            ]);
        })->run();
    }
}
