<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class, 'index'] );

Route::group(['as'=>'admin.','prefix' => '/admin'], function(){
    Route::get('/dashboard', function() {
        return view('admin/layouts/app');
    });
    Route::group(['as' => 'slider.','prefix' => '/slider'], function(){
        Route::get('/', [SliderController::class, 'index'])->name('slider');

        Route::get('/add', [SliderController::class, 'add'])->name('add');
        Route::post('/add', [SliderController::class, 'create'])->name('create');
        
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [SliderController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('delete');
    });

    Route::group(['prefix' => '/product'], function(){
        Route::get('/', function() {
            return view('admin/product/index');
        });
        Route::get('/add', function() {
            return view('admin/product/add');
        });
        Route::get('/edit', function() {
            return view('admin/product/edit');
        });
    });
    Route::group(['prefix' => '/category'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('category');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::post('/add', [CategoryController::class, 'add'])->name('add');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');


        Route::get('/edit', function() {
            return view('admin/category/edit');
        });
    });
});