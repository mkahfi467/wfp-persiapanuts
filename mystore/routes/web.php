<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// WEEK 4
use App\Http\Controllers\ProductController;

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
    return view('utama');
});

// WEEK 
// Route::get('/kategori/{k?}', function($k = "tidak ada"){
//     if ($k == "tidak ada") {
//         // return "Daftar semua daftar Kategori";
//         return view('kategori');
//     } else {
//         // return "Daftar produk kategori ".$k;
//         return view('kategori');
//     }
// });

// Route::get('/produk/{p}', function($p){
//     return "Deskripsi Detail ".$p;
// });

Route::get('/member/{m}', function($m){
    return "Deskripsi Detail ". $m;
});

// WEEK 4
Route::resource('produk', ProductController::class);

// WEEK 7
Route::post('/produk/showInfo',[ProductController::class,'showInfo'])->name('products.showInfo');

Route::resource('category', CategoryController::class);