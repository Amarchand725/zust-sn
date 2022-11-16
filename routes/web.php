<?php

use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\SystemController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend
Route::get('/', [WebController::class, 'index'])->name('home');

Route::group(['middleware' => ['guest']], function(){
    Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AdminController::class, 'authenticate'])->name('admin.login');
});

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('/logout', [AdminController::class, 'logOut'])->name('admin.logout');

    //admin reset password
    Route::get('forgot_password', [AdminController::class, 'forgotPassword'])->name('admin.forgot_password');
    Route::get('send-password-reset-link', [AdminController::class, 'passwordResetLink'])->name('admin.send-password-reset-link');
    Route::get('reset-password/{token}', [AdminController::class, 'resetPassword'])->name('admin.reset-password');
    Route::post('change_password', [AdminController::class, 'changePassword'])->name('admin.change_password');

    //system controller
    Route::get('system/setting', [SystemController::class, 'setting'])->name('admin.system.setting');
    Route::post('system/setting', [SystemController::class, 'storeSetting'])->name('admin.system.setting');
    Route::post('system/setting/update/{id}', [SystemController::class, 'updateSetting'])->name('admin.system.setting.update');

    //pages settings
    /* Route::resource('page', 'admin\PageController');
    Route::resource('page_setting', 'admin\PageSettingController'); */

    //permissions
    // Route::resource('permission', [PermissionController::class]);

    //Roles
    // Route::resource('role', [RoleController::class]);

    // Route::resource('menu', 'admin\MenuController');
});

require __DIR__.'/auth.php';
