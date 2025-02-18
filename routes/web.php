<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HoangHoangDinhCanhController;
// Method http
//      GET, POST, PUT, PATCH, DELETE

// Base url: http://127.0.0.1:8000/

// http://127.0.0.1:8000/test
Route::get('test', function() {
    echo 'hello';
});
// http://127.0.0.1:8000/
Route::get('/', function() {
    echo 'trang chủ';
});

// list-product
Route::get('list-product', [ProductController::class, 'showProduct']);

// Slug
// http://127.0.0.1:8000/get-product/1
Route::get('get-product/{id}', [ProductController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=1&name=iphone
Route::get('update-product', [ProductController::class, 'updateProduct']);

// Thông tin sinh viên
Route::get('/thongtinsv', [HoangHoangDinhCanhController::class, 'show']);