<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\User\FrontController;
use App\Http\Controllers\Authentication\Registration;
use App\Http\Controllers\Auth\CustomReg;


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
Route::get('home',[FrontController::class,'index']);


Route::get('prodpage',[FrontController::class,'products']);
Route::get('cart',[FrontController::class,'cartpage']);

Route::get('aboutus', function(){
    return view('user/aboutus');
});
Route::get('contacts', function(){
    return view('user/contact');
});
Route::get('return', function(){
    return view('user/return');
});
Route::get('shipping', function(){
    return view('user/shipping');
});
Route::get('terms', function(){
    return view('user/termsandconditions');
});
Route::get('register',[Registration::class,'registration']);
Route::get('login',[Registration::class,'login']);
Route::post('reg-user',[Registration::class,'storeuser']);
Route::post('authenticate-user',[Registration::class,'signin']);






// Auth::routes();

// Route::middleware(['auth','isAdmin'])->group(function(){
//     Route::get('/dashboard','Admin\FrontendController@index');


//     Route::get('categories','Admin\CategoryController@index');
//     Route::get('add-category', 'Admin\CategoryController@add');
//     Route::post('insert-cate', 'Admin\CategoryController@insert');
//     Route::get('edit-category/{id}', [CategoryController::class,'edit']);
//     Route::put('update-category/{id}', [CategoryController::class,'update']);
//     Route::get('delete-category/{id}', [CategoryController::class,'delete']);
//     Route::get('view-category/{id}','Admin\CategoryController@view');

   
//     Route::get('products','Admin\ProductController@index');
//     Route::get('add-Product', 'Admin\ProductController@add');
//     Route::get('edit-prod/{id}', [ProductController::class,'edit']);
//     Route::post('insert-prod', 'Admin\ProductController@insert');
//     Route::put('update-prod/{id}', [ProductController::class,'update']);
//     Route::get('delete-prod/{id}', [ProductController::class,'delete']);

    

    
    
//     Route::get('users','Admin\UserController@index');
//     Route::get('add-User', 'Admin\UserController@add');
//     Route::get('edit-user/{id}', [UserController::class,'edit']);
//     Route::post('insert-user', 'Admin\UserController@insert');
//     Route::put('update-user/{id}', [UserController::class,'update']);
//     Route::get('delete-user/{id}', [UserController::class,'delete']);

// });
 
