<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/user/profile', [HomeController::class, 'userprofile'])->name('user.profile');
    Route::post('/user/profile', [HomeController::class, 'createprofile'])->name('user.createprofile');

    Route::get('/user/detail', [HomeController::class, 'userdetail'])->name('user.detail');
    Route::get('/user/edit/{id}', [HomeController::class, 'useredit'])->name('user.edit');
    Route::post('/user/update/{id}', [HomeController::class, 'userupdate'])->name('user.update');

    Route::get('/user/delete/{id}', [HomeController::class, 'userdelete'])->name('user.delete');

    Route::get('/user/contact', [HomeController::class, 'usercontact'])->name('user.contact');




});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/profile', [HomeController::class, 'adminprofile'])->name('admin.profile');

    Route::get('/admin/add', [HomeController::class, 'adminadd'])->name('admin.add');
    Route::post('/admin/save', [HomeController::class, 'adminsave'])->name('admin.save');
    // Route::get('/admin/show', [HomeController::class, 'adminshow'])->name('admin.show');
    Route::get('/admin/delete/{id}', [HomeController::class, 'admindelete'])->name('admin.delete');


    Route::get('/admin/blank', [HomeController::class, 'adminblank'])->name('admin.blank');




});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

    // Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});