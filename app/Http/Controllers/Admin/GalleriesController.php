<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\DemoModel;
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

        $this->crud = Doc::create($this, DemoModel::class, function (BluePrint $input) {
            $input->text('title')->required();
            $input->text('sortOrder', 'Sort Order');
            $input->select('status')->noFirst()->options([
                1 => 'Active',
                0 => 'Inactive',
            ]);

            $input->multiple('images', 'Images', function ($input) {
                $input->image('image');
            })->required()->orderable();
        });
    }
}
