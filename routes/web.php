<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\TokoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;


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
    });

    Route::group(['as' => 'toko.','prefix' => '/toko'], function(){
        Route::get('/', [TokoController::class, 'index'])->name('index');

        Route::post('/add', [TokoController::class, 'add'])->name('add');
        Route::post('/update/{id}', [TokoController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [TokoController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'product.','prefix' => '/product'], function(){
        Route::get('/', [ProductController::class, 'index'])->name('index');

        Route::get('/add', [ProductController::class, 'add'])->name('add');
        Route::post('/add', [ProductController::class, 'create'])->name('create');
        
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/edit/{id}', [ProductController::class, 'update'])->name('update');

        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
    });


    Route::group(['as'=>'category.','prefix' => '/category'], function(){
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
        Route::post('/add', [CategoryController::class, 'add'])->name('add');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('update');


        Route::get('/edit', function() {
            return view('admin/category/edit');
        });
    });
});