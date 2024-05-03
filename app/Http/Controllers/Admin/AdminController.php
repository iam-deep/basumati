<?php

namespace App\Http\Controllers\Admin;

use Deep\FormTool\Core\BaseController;
use Deep\FormTool\Core\Guard;
use Deep\FormTool\Support\Menu;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    use ValidatesRequests;
    use BaseController;

    protected $settings = null;

    public function __construct()
    {
        $this->settings = \app('settings');
    }

    public function render($view, $data = [])
    {
        $menu = Menu::create();

        $menu->add('dashboard', 'Dashboard', 'fa fa-dashboard');
        $menu->add('demo-pages', 'Demo Pages', 'fa fa-bars');

        $menu->add('activities-log', 'Activities Log', 'fa fa-bars');
        $menu->addNested('Users', 'fa fa-users', function ($child) {
            $child->add('users', 'Users');
            $child->add('user-groups', 'User Groups');
        });

        $menu->addNested('Settings', 'fa fa-gears', function ($child) {
            $child->add('settings', 'General');
            $child->add('change-password', 'Change Password');
        });

        $data['sidebar'] = $menu->make();

        if (false === strpos($view, 'form-tool::')) {
            $view = 'admin.'.$view;
        }

        return view($view, $data);
    }
}
