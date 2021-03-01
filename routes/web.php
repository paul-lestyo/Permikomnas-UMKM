<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'] );

// Route::group(['as'=>'admin.','prefix' => '/admin'], function(){
//     Route::get('/', function() {
//         return view('admin/index');
//     });
//     Route::group(['as' => 'slider.','prefix' => '/slider'], function(){
//         Route::get('/', [SliderController::class, 'index']);

//         Route::get('/add', [SliderController::class, 'add'])->name('add');
//         Route::post('/add', [SliderController::class, 'create'])->name('create');
        
//         Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
//         Route::post('/edit/{id}', [SliderController::class, 'update'])->name('update');

//         Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
//     });

//     Route::group(['prefix' => '/product'], function(){
//         Route::get('/', function() {
//             return view('admin/product/index');
//         });
//         Route::get('/add', function() {
//             return view('admin/product/add');
//         });
//         Route::get('/edit', function() {
//             return view('admin/product/edit');
//         });
//     });

//     Route::group(['prefix' => '/category'], function(){
//         Route::get('/', function() {
//             return view('admin/category/index');
//         });
//         Route::get('/add', function() {
//             return view('admin/category/add');
//         });
//         Route::get('/edit', function() {
//             return view('admin/category/edit');
//         });
//     });
// });