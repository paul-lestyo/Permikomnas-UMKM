<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/admin'], function(){
    Route::get('/', function() {
        return view('admin/index');
    });
    Route::group(['prefix' => '/slider'], function(){
        Route::get('/', function() {
            return view('admin/slider/index');
        });
        Route::get('/add', function() {
            return view('admin/slider/add');
        });
        Route::get('/edit', function() {
            return view('admin/slider/edit');
        });
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
        Route::get('/', function() {
            return view('admin/category/index');
        });
        Route::get('/add', function() {
            return view('admin/category/add');
        });
        Route::get('/edit', function() {
            return view('admin/category/edit');
        });
    });
});