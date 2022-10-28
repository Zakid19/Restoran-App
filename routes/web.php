<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Frontend\CategoryController as FrontendCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontendMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontendReservationController;
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

Route::get('dashboard', DashboardController::class)->name('dashboard');



// MIDDLEWARE USER
Route::middleware('auth')->group(function() {
    Route::get('home', [HomeController::class, 'index'])->name('home.index');
    Route::get('category',[FrontendCategoryController::class, 'index'])->name('category.index');
    Route::get('category/{category}',[FrontendCategoryController::class, 'show'])->name('category.show');
    Route::get('menu', [FrontendMenuController::class,'index'])->name('menu.index');
    Route::get('reservation/one', [FrontendReservationController::class, 'one'])->name('reservation.one');
    Route::get('reservation/two', [FrontendReservationController::class, 'two'])->name('reservation.two');
});


// MIDDLEWARE ADMIN
Route::middleware('auth', 'admin')->name('admin.')->group(function() {
    Route::get('admin', [AdminController::class, 'index'])->name('index');
    Route::resource('admin/category', CategoryController::class);
    Route::resource('admin/menu', MenuController::class);
    Route::resource('admin/table', TableController::class);
    Route::resource('admin/reservation', ReservationController::class);

});

require __DIR__.'/auth.php';
