<?php

use Deep\FormTool\Http\Middleware\GuardRequest;
use Deep\FormTool\Support\CrudRoute;
use Illuminate\Support\Facades\DB;
// Middlewares
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.index');
});

Route::get('/team', function () {
    return view('front.team');
});

Route::get('/services', function () {
    return view('front.services');
});

Route::get('projects', function () {
    return view('front.projects');
});

Route::get('projects-ongoing', function () {
    $data = [];

    $data['title'] = 'Ongoing Projects';
    $data['galleries'] = DB::table('galleries_ongoing')->where('status', 1)->orderBy('sortOrder')->whereNull('deletedAt')->get();

    return view('front.gallery', $data);
});

Route::get('projects-completed', function () {
    $data = [];

    $data['title'] = 'Completed Projects';
    $data['galleries'] = DB::table('galleries_completed')->where('status', 1)->orderBy('sortOrder')->whereNull('deletedAt')->get();

    return view('front.gallery', $data);
});

Route::get('contact', function () {
    return view('front.contact');
});

// Admin Routes
// The name of the route works with Guard class for user permissions
Route::middleware(['auth', GuardRequest::class])->prefix(config('form-tool.adminURL'))
->name('')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    CrudRoute::resource('galleries-ongoing', App\Http\Controllers\Admin\GalleriesController::class);
    CrudRoute::resource('galleries-completed', App\Http\Controllers\Admin\CompletedController::class);

    CrudRoute::resource('users', App\Http\Controllers\Admin\UsersController::class);
    CrudRoute::resource('user-groups', App\Http\Controllers\Admin\UserGroupsController::class);

    Route::get('activities-log/show/{id}', [App\Http\Controllers\Admin\ActionsLogController::class, 'show'])
        ->name('activities-log.show');
    Route::get('activities-log', [App\Http\Controllers\Admin\ActionsLogController::class, 'index'])
        ->name('activities-log');

    CrudRoute::indexAndUpdate('settings', App\Http\Controllers\Admin\SettingsController::class);
    CrudRoute::indexAndUpdate('change-password', App\Http\Controllers\Admin\ChangePasswordController::class, '/{id}');
});

require __DIR__.'/auth.php';
