<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Deep\FormTool\Core\Doc;
use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use App\Http\InputTypes\StatusType;
use App\Http\InputTypes\YesNoCheckbox;
use App\Models\Admin\DemoModel;

class ServicesController extends AdminController
{
    // Required for Form Tool
    public $title = 'Services';
    public $route = 'services';
    public $singularTitle = 'Services';

    protected $crud = null;

    public function setup()
    {
        $model = new DataModel();
        $model->db('services', 'servicesID')->token('testToken');

        $this->crud = Doc::create($this, DemoModel::class, function (BluePrint $input) {
            $input->text('title')->required();
            $input->text('slug')->slug();
            $input->textarea('content');
            $input->text('author', 'Author Name');
            $input->image('image')->path('demo');
            $input->select('status')->noFirst()->options([
                1 => 'Active',
                0 => 'Inactive'
            ]);
        })->run();
    }

    
}
