<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ColorController;






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



Route::get('admin',[AuthController::class,'login_admin']);
Route::post('admin',[AuthController::class,'auth_login_admin']);
Route::get('admin/logout',[AuthController::class,'logout_admin']);



Route::group(['middleware'=>'admin'], function(){


  Route::get('admin/dashboard',[DashboardController::class,'dashboard']);

  /*  Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    }); */

    Route::get('admin/admin/list', function () {
        $data['header_title']='Admin';
        return view('admin.admin.list', $data);
    });

});

//category
Route::get('admin/category/list',[CategoryController::class,'list']);
Route::get('admin/category/add',[CategoryController::class,'add']);
Route::post('admin/category/add',[CategoryController::class,'insert']);
Route::get('admin/category/edit/{id}',[CategoryController::class,'edit']);
Route::post('admin/category/edit/{id}',[CategoryController::class,'update']);
Route::get('admin/category/delete/{id}',[CategoryController::class,'delete']);

//sub category
Route::get('admin/sub_category/list',[SubCategoryController::class,'list']);
Route::get('admin/sub_category/add',[SubCategoryController::class,'add']);
Route::post('admin/sub_category/add',[SubCategoryController::class,'insert']);
Route::get('admin/sub_category/edit/{id}',[SubCategoryController::class,'edit']);
Route::post('admin/sub_category/edit/{id}',[SubCategoryController::class,'update']);
Route::get('admin/sub_category/delete/{id}',[SubCategoryController::class,'delete']);

Route::post('admin/get_sub_category',[SubCategoryController::class,'get_sub_category']);
//Route::get('admin/get_sub_categories',[SubCategoryController::class,'get_sub_categories']);



//brand
Route::get('admin/brand/list',[BrandController::class,'list']);
Route::get('admin/brand/add',[BrandController::class,'add']);
Route::post('admin/brand/add',[BrandController::class,'insert']);
Route::get('admin/brand/edit/{id}',[BrandController::class,'edit']);
Route::post('admin/brand/edit/{id}',[BrandController::class,'update']);
Route::get('admin/brand/delete/{id}',[BrandController::class,'delete']);

//color
Route::get('admin/color/list',[ColorController::class,'list']);
Route::get('admin/color/add',[ColorController::class,'add']);
Route::post('admin/color/add',[ColorController::class,'insert']);
Route::get('admin/color/edit/{id}',[ColorController::class,'edit']);
Route::post('admin/color/edit/{id}',[ColorController::class,'update']);
Route::get('admin/color/delete/{id}',[ColorController::class,'delete']);

//product
Route::get('admin/product/list',[ProductController::class,'list']);
Route::get('admin/product/add',[ProductController::class,'add']);
Route::post('admin/product/add',[ProductController::class,'insert']);
Route::get('admin/product/edit/{id}',[ProductController::class,'edit']);




Route::get('/', function () {
    return view('welcome');
});
