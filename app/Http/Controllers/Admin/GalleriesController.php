<?php

namespace App\Http\Controllers\Admin;

use Deep\FormTool\Core\BluePrint;
use Deep\FormTool\Core\DataModel;
use Deep\FormTool\Core\Doc;

class GalleriesController extends AdminController
{
    // Required for Form Tool
    public $title = 'Galleries';
    public $route = 'galleries';
    public $singularTitle = 'Galleries';

    protected $crud;

    public function setup()
    {
        $model = new DataModel();
        $model->db('galleries', 'galleryid');

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
