<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Controllers\AdminController;

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

// Frontend
// localhost/project
Route::get('/', function () {
    return view('frontend.index');
})->name('template');

    // Register
    // localhost/project/signup
Route::get('/signup', [AuthController::class, 'signup'])->name('frontend.auth.signup');
Route::post('/signup', [AuthController::class, 'postSignup']);

    // Login
    // localhost/project/login
Route::get('/login', [AuthController::class, 'login'])->name('frontend.auth.login');
Route::post('/login', [AuthController::class, 'postLogin']);

    //Logout
Route::get('/logout', [AuthController::class, 'logout'])->name('frontend.auth.logout');


// Backend

// localhost/project/admin
Route::get('/admin', [AdminController::class, 'login'])->name('login');
Route::post('/admin', [AdminController::class, 'postLogin']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Dashboard
Route::get('/admin/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('admin.dashboard');

    // Category
Route::prefix('admin/category')->name('admin.category.')->group(function () {

    // Category: localhost/project/admin/category
    Route::get('/', [CategoryController::class, 'index'])->name('categories');

    // Thêm mới category:   localhost/project/admin/category/create
    Route::match(['GET', 'POST'],'/create', [CategoryController::class, 'store'])->name('create-category');

    // Xem chi tiết: localhost/project/admin/category/detail/{id}
    Route::match(['GET', 'POST'],'/detail/{id}', [CategoryController::class, 'show'])->name('category-detail');

    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');

    // Update category:  localhost/project/admin/category/update/{id}
    Route::match(['GET', 'POST'],'/update/{id}', [CategoryController::class, 'update'])->name('category-update');

});


// Product
Route::prefix('admin/product')->name('admin.product.')->group(function () {

    // Product: localhost/project/admin/product
    Route::get('/', [ProductController::class, 'index'])->name('products');

    // Tạo: localhost/project/admin/product/create
    Route::match(['GET', 'POST'],'/create', [ProductController::class, 'store'])->name('create-product');

    // Xem: localhost/project/admin/product/detail/{id}
    Route::match(['GET', 'POST'],'/detail/{id}', [ProductController::class, 'show'])->name('product-detail');

    Route::get('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');

    // Update: localhost/project/admin/product/update/{id}
    Route::match(['GET', 'POST'],'/update/{id}', [ProductController::class, 'update'])->name('product-update');

});



    // User
Route::prefix('user')->name('admin.user.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('users');
//    Route::match(['GET', 'POST'],'/create', [CategoryController::class, 'store'])->name('create');
//    Route::match(['GET', 'POST'],'/detail/{id}', [CategoryController::class, 'show'])->name('detail');
//    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
//    Route::match(['GET', 'POST'],'/update/{id}', [CategoryController::class, 'update'])->name('update');

});


Route::prefix('order')->name('admin.order.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('orders');
//    Route::match(['GET', 'POST'],'/create', [CategoryController::class, 'store'])->name('create');
//    Route::match(['GET', 'POST'],'/detail/{id}', [CategoryController::class, 'show'])->name('detail');
//    Route::get('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
//    Route::match(['GET', 'POST'],'/update/{id}', [CategoryController::class, 'update'])->name('update');

});


