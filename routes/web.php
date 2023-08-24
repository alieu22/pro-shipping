
<?php

use App\Http\Controllers\controllers\AboutController;
use App\Http\Controllers\controllers\ServicesController;
use App\Http\Controllers\controllers\LocationController;
use App\Http\Controllers\controllers\ProductsController;
use App\Http\Controllers\controllers\ContactController;

use Illuminate\Support\Facades\Route;


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
    return view('web.home');
});

Auth::routes();

Route::get('/home', function () { // the main home page
    return view('web.home');
})->name('home');

Route::group([], function() {
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/services', [ServicesController::class, 'index'])->name('services');
    Route::get('/products', [ProductsController::class, 'index'])->name('products');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});