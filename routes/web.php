<?php

use App\Http\Controllers\AuthController;
// use App\Http\Controllers\produkController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\expeditionController;
use App\Http\Controllers\productController;
use App\Http\Controllers\promoController;
// use App\Http\Controllers\RegisterController;
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

//Route::get('/register', [RegisterController::class, 'index']);
//Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login/auth', [AuthController::class, 'validasi']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/full', function () {return view('full');});
Route::get('/shop', function () {return view('shop');});
Route::get('/dashboard', function () {return view('dashboard');});
// Route::get('/dashboard', [produkController::class, 'index']);
Route::get('/about', function () {return view('about');});
Route::get('/detailProduct', function () {return view('detailProduct');});
Route::get('/shoppingCart', function () {return view('shoppingCart');});

// Route::get('/tambah_produk', [produkController::class, 'tambah']);
// Route::post('/tambah_produk/simpan', [produkController::class, 'simpan']);

//Route PP
Route::get('/profile', function () {return view('profile');});

//Route Men'Categories
Route::get('/shop_men', function () {return view('shop_men');});
//Route Woman'Categories
Route::get('/shop_woman', function () {return view('shop_woman');});

//admin
Route::get('/admin', [adminController::class, 'tampil']);
Route::get('/admin/tambah', [adminController::class, 'tambah']);
Route::post('/admin/simpan', [adminController::class, 'simpan']);
Route::get('/admin/edit/{id_admin}', [adminController::class, 'edit']);
Route::put('/admin/baru/{id_admin}', [adminController::class, 'baru']);
Route::get('/admin/hapus/{id_admin}', [adminController::class, 'hapus']);

//customer
Route::get('/customer', [customerController::class, 'tampil']);
Route::get('/customer/tambah', [customerController::class, 'tambah']);
Route::post('/customer/simpan', [customerController::class, 'simpan']);
Route::get('/customer/edit/{id_customer}', [customerController::class, 'edit']);
Route::put('/customer/baru/{id_customer}', [customerController::class, 'baru']);
Route::get('/customer/hapus/{id_customer}', [customerController::class, 'hapus']);

//product
Route::get('/product', [productController::class, 'tampil']);
Route::get('/product/tambah', [productController::class, 'tambah']);
Route::post('/product/simpan', [productController::class, 'simpan']);
Route::get('/product/edit/{id_product}', [productController::class, 'edit']);
Route::put('/product/baru/{id_product}', [productController::class, 'baru']);
Route::get('/product/hapus/{id_product}', [productController::class, 'hapus']);

//promo
Route::get('/promo', [promoController::class, 'index']);
Route::get('/promo/tambah', [promoController::class, 'tambah']);
Route::post('/promo/simpan', [promoController::class, 'simpan']);
Route::get('/promo/hapus/{kd_promo}', [promoController::class, 'delete']);
Route::get('/promo/edit/{kd_promo}', [promoController::class, 'edit']);
Route::put('/promo/update/{kd_promo}', [promoController::class, 'update']);

//ekspedition
Route::get('/expedition', [expeditionController::class, 'index']);
Route::get('/expedition/tambah', [expeditionController::class, 'tambah']);
Route::post('/expedition/simpan', [expeditionController::class, 'simpan']);
Route::get('/expedition/hapus/{kd_ekspedisi}', [expeditionController::class, 'delete']);
Route::get('/expedition/edit/{kd_ekspedisi}', [expeditionController::class, 'edit']);
Route::put('/expedition/update/{kd_ekspedisi}', [expeditionController::class, 'update']);

//category
Route::get('/category', [categoryController::class, 'index']);
Route::get('/category/tambah', [categoryController::class, 'tambah']);
Route::post('/category/simpan', [categoryController::class, 'simpan']);
Route::get('/category/hapus/{id_kategori}', [categoryController::class, 'delete']);
Route::get('/category/edit/{id_kategori}', [categoryController::class, 'edit']);
Route::put('/category/update/{id_kategori}', [categoryController::class, 'update']);
