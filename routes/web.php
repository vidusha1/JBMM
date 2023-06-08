<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\BrandsController;
use App\Http\Controllers\Admin\ColorsController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CustomersController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\AdminDashboardController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/brands', [BrandsController::class, 'index'])->name('brands.index');
    Route::get('/colors', [ColorsController::class, 'index'])->name('colors.index');
    Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
    Route::get('/orders', [OrdersController::class, 'index'])->name('orders.index');
    Route::get('/reports', [ReportsController::class, 'index'])->name('reports.index');
    Route::get('/customers', [CustomersController::class, 'index'])->name('customers.index');
    Route::get('/invoices', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/inventory', [WarehouseController::class, 'index'])->name('inventory.index');
    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('/promotions', [PromotionController::class, 'index'])->name('promotions.index');
    Route::get('/users', [UsersController::class, 'index'])->name('users.index');
});
