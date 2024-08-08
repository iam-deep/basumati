<?php

namespace App\Http\Controllers\Admin;

use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use Deep\FormTool\Core\Doc;

class CompletedController extends AdminController
{
    // Required for Form Tool
    public $title = 'Completed Projects';
    public $route = 'galleries-completed';
    public $singularTitle = 'Gallery';

    protected $crud;

    public function setup()
    {
        $model = new DataModel();
        $model->db('galleries_completed', 'galleryid');

        $this->crud = Doc::create($this, $model, function (BluePrint $input) {
            $input->text('title')->required();
            $input->number('sortOrder', 'Sort Order');
            $input->select('status')->noFirst()->options([
                1 => 'Active',
                0 => 'Inactive',
            ])->default(1);

            $input->multiple('images', 'Images', function ($input) {
                $input->image('image');
            })->required()->orderable();
        });
    }
}
