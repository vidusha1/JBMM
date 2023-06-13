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
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin/')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Category Route
    Route::prefix('categories/')->group(function () {
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('categories.index');
            Route::get('/category', 'create')->name('category.create');
            Route::post('/category', 'store')->name('category.store');
            Route::get('/{category}/edit', 'edit')->name('category.edit');
            Route::put('/{category}/', 'update')->name('category.update');
            Route::get('/{category}/delete', 'destroy')->name('category.destroy');
        });
    });

    // Brand Route
    // Livewire
    // Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class)->name('brands');

    // Brand Controller
    Route::prefix('brand/')->group(function () {
        Route::controller(BrandsController::class)->group(function () {
            Route::get('/', 'index')->name('brands');
            Route::get('/brand', 'create')->name('brand.create');
            Route::post('/brand', 'store')->name('brand.store');
            Route::get('/{brand}/edit', 'edit')->name('brand.edit');
        });
    });

    // Colors
    Route::prefix('/colors')->group(function () {
        Route::controller(ColorsController::class)->group(function () {
            Route::get('/colors', 'index')->name('colors.index');
        });
    });

    // Products
    Route::prefix('/products')->group(function () {
        Route::controller(ProductsController::class)->group(function () {
            Route::get('/products', 'index')->name('products.index');
        });
    });

    // Orders
    Route::prefix('/orders')->group(function () {
        Route::controller(OrdersController::class)->group(function () {
            Route::get('/orders', 'index')->name('orders.index');
        });
    });

    // Reports
    Route::prefix('/reports')->group(function () {
        Route::controller(ReportsController::class)->group(function () {
            Route::get('/reports', 'index')->name('reports.index');
        });
    });

    // Customers
    Route::prefix('/customers')->group(function () {
        Route::controller(CustomersController::class)->group(function () {
            Route::get('/customers', 'index')->name('customers.index');
        });
    });

    // Invoices
    Route::prefix('/invoices')->group(function () {
        Route::controller(InvoiceController::class)->group(function () {
            Route::get('/invoices', 'index')->name('invoices.index');
        });
    });

    // Inventory
    Route::prefix('/inventory')->group(function () {
        Route::controller(WarehouseController::class)->group(function () {
            Route::get('/inventory', 'index')->name('inventory.index');
        });
    });

    // Sliders
    Route::prefix('/sliders')->group(function () {
        Route::controller(SliderController::class)->group(function () {
            Route::get('/sliders', 'index')->name('sliders.index');
        });
    });

    // Promotions
    Route::prefix('/promotions')->group(function () {
        Route::controller(PromotionController::class)->group(function () {
            Route::get('/promotions', 'index')->name('promotions.index');
        });
    });

    // Promotions
    Route::prefix('/users')->group(function () {
        Route::controller(UsersController::class)->group(function () {
            Route::get('/users', 'index')->name('users.index');
        });
    });
});
