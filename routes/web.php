<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/detail', [DetailController::class,'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class,'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class,'success'])->name('checkout-success');

// Route::get('/', 'HomeController@index')->name('home');

// [webkita.com/admin/]

  Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])  //menambahkan semacam satpam di web kita berhubungan dengan penambahan kernel IsAdmin
    ->group(function(){
        Route::get('/', [DashboardController::class,'index'])
            ->name('dashboard');
        
    });
    // Route::resource('travelpackage', 'App\Http\Controllers\Admin\TravelPackageController');
    // Route::resource('gallery', 'App\Http\Controllers\Admin\GalleryController');
    Route::resource('travelpackage', TravelPackageController::class);
    Route::resource('gallery', GalleryController::class);
    Route::resource('transaction', TransactionController::class);
    // Route::resource('transaksi', 'App\Http\Controllers\Admin\TransactionController');
    
    Auth::routes(['verify' =>true]);