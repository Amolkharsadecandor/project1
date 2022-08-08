<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
// route for user list  config 

 Route::get('/usernamelist',[UserController::class,'index']);
 // close
// set route for controller 
use App\Http\Controllers\CompanyCRUDController;  //copany controller route 
 
Route::resource('companies', CompanyCRUDController::class); // company controller route

// set route for department 
use App\Http\Controllers\DepartmentController;
 
Route::resource('dep', DepartmentController::class);
//- 

Route::get('form1', [DepartmentController::class, 'index']);
Route::post('store-form1', [DepartmentController::class, 'store']);

//
// form control validation  for form controller
use App\Http\Controllers\FormController;
 
Route::get('form', [FormController::class, 'index']);
Route::post('store-form', [FormController::class, 'store']);

