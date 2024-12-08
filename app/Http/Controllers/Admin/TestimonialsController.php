<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Deep\FormTool\Core\Doc;
use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use App\Http\InputTypes\StatusType;
use App\Http\InputTypes\YesNoCheckbox;
use App\Models\Admin\DemoModel;

class TestimonialsController extends AdminController
{
    // Required for Form Tool
    public $title = 'Testimonials';
    public $route = 'testimonials';
    public $singularTitle = 'Testimonials';

    protected $crud = null;

    public function setup()
    {
        $model = new DataModel();
        $model->db('testimonials', 'testimonyID');

        $this->crud = Doc::create($this, $model, function (BluePrint $input) {
            $input->text('title')->required();

            $input->textarea('content');
            $input->image('images');
            $input->select('status')->noFirst()->options([
                1 => 'Active',
                0 => 'Inactive'
            ]);
        });
    }
}
