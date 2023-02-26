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
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', [WebController::class, 'index'])->name('home');
    Route::get('/notifications', [WebController::class, 'notification'])->name('notifications');
    Route::get('/chat', [WebController::class, 'chat'])->name('chat');
    Route::get('/friends', [WebController::class, 'friends'])->name('friends');
    Route::get('/groups', [WebController::class, 'groups'])->name('groups');
    Route::get('/favorite', [WebController::class, 'favorite'])->name('favorite');
    Route::get('/events', [WebController::class, 'events'])->name('events');
    Route::get('/live-chat', [WebController::class, 'liveChat'])->name('live-chat');
    Route::get('/birthday', [WebController::class, 'birthday'])->name('birthday');
    Route::get('/videos', [WebController::class, 'videos'])->name('videos');
    Route::get('/weather', [WebController::class, 'weather'])->name('weather');
    Route::get('/marketplace', [WebController::class, 'marketplace'])->name('marketplace');
    Route::get('/my-profile', [WebController::class, 'myProfile'])->name('my-profile');
    Route::get('/account-setting', [WebController::class, 'accountSetting'])->name('account-setting');
    Route::get('/help-and-support', [WebController::class, 'helpAndSupport'])->name('help-and-support');
});

Route::get('/privacy', [WebController::class, 'privacy'])->name('privacy');

Route::group(['middleware' => ['guest']], function(){
    Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('admin/login', [AdminController::class, 'authenticate'])->name('admin.login');
});
Route::get('account/verify/{token}', [App\Http\Controllers\UserController::class, 'verifyAccount'])->name('user.verify');

Route::get('dashboard', [App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard')->middleware(['auth', 'is_verify_email']);

// auto-routes: admin
Route::get('category/trash/records', 'App\Http\Controllers\general\CategoryController@trashRecords')->name('general.category.trash.records');
Route::get('category/restore/{id}', 'App\Http\Controllers\general\CategoryController@restore')->name('general.category.restore');

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile/edit', [AdminController::class, 'editProfile'])->name('admin.profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('/logout', [AdminController::class, 'logOut'])->name('admin.logout');
    Route::get('/markasread/{id}', [AdminController::class, 'markasread'])->name('admin.markasread');
    Route::get('/view/all/notifications', [AdminController::class, 'viewAllNotifications'])->name('admin.view.all.notifications');

    //spacial User Permission
    Route::get('/user/create-spacial-permission/{user_id}', [AdminController::class, 'createSpacialPermission'])->name('admin.user.create-spacial-permission');
    Route::post('/user/store-spacial-permission', [AdminController::class, 'storeSpacialPermission'])->name('admin.user.store-spacial-permission');
    Route::patch('/user/update-spacial-permission/{id}', [AdminController::class, 'updateSpacialPermission'])->name('admin.user.update-spacial-permission');

    //get soft deleted records
    Route::get('user/trash/records', 'App\Http\Controllers\auth\RegisteredUserController@trashAllUser')->name('admin.user.trash.records');
    Route::get('user/restore/{id}', 'App\Http\Controllers\auth\RegisteredUserController@restore')->name('admin.user.restore');

    //role
    Route::get('role/trash/records', 'App\Http\Controllers\admin\RoleController@trashAllRole')->name('admin.role.trash.records');
    Route::get('role/restore/{id}', 'App\Http\Controllers\admin\RoleController@restore')->name('admin.role.restore');

    //permission
    Route::get('permission/trash/records', 'App\Http\Controllers\admin\permissionController@trashAllPermission')->name('admin.permission.trash.records');
    Route::get('permission/restore/{id}', 'App\Http\Controllers\admin\permissionController@restore')->name('admin.permission.restore');

    //Log Activity
    Route::get('logactivity/trash/records', 'App\Http\Controllers\admin\SystemController@trashAlllogActivity')->name('admin.logactivity.trash.records');
    Route::get('logactivity/restore/{id}', 'App\Http\Controllers\admin\SystemController@restore')->name('admin.logactivity.restore');

    //Menu
    Route::get('menu/trash/records', 'App\Http\Controllers\admin\MenuController@trashRecords')->name('admin.menu.trash.records');
    Route::get('menu/restore/{id}', 'App\Http\Controllers\admin\MenuController@restore')->name('admin.menu.restore');

    //system controller
    Route::get('system/setting', [SystemController::class, 'setting'])->name('admin.system.setting');
    Route::post('system/setting', [SystemController::class, 'settingStore'])->name('admin.system.setting');
    Route::get('system/company/profile', [SystemController::class, 'companyProfile'])->name('admin.system.company.profile');
    Route::post('system/company/profile', [SystemController::class, 'storeCompanyProfile'])->name('admin.system.company.profile');

    Route::get('system/email-config', [SystemController::class, 'emailConfig'])->name('admin.email-config');
    Route::post('system/email-config', [SystemController::class, 'emailConfigStore'])->name('admin.email-config');

    Route::get('logActivity', [SystemController::class, 'logActivity'])->name('admin.logActivity');
    Route::get('logActivity/show/{id}', [SystemController::class, 'showLogActivity'])->name('admin.logActivity.show');
    Route::delete('logActivity/destroy/{id}', [SystemController::class, 'deleteLogActivity'])->name('admin.logactivity.destroy');

    //permissions
    Route::resource('permission', 'App\Http\Controllers\admin\PermissionController');

    //Roles
    Route::resource('role', 'App\Http\Controllers\admin\RoleController');

    //Users
    Route::resource('user', 'App\Http\Controllers\auth\RegisteredUserController');

    Route::resource('menu', 'App\Http\Controllers\admin\MenuController');
});

require __DIR__.'/auth.php';


Route::resource('general/category', 'App\Http\Controllers\general\CategoryController');
