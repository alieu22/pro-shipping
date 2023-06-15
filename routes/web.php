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


Route::get('/', function () { // i think this is the code that will show a the main page when the site loads 
    return view('web.home'); // it was layouts.home but that gave an error 
});



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([], function() { //  the route group takes all the pages and puts them in a routed group
    Route::get('/about', [AboutController::class, 'index'])->name('about'); //shows the about page content
    Route:: get('/services', [ServicesController::class, 'index'])->name('services'); // shows the services page content
    Route:: get('/locations', [LocationController::class, 'index'])->name('locations'); 
    Route:: get('/products', [ProductsController::class, 'index'])->name('products'); 
    Route:: get('/contact', [ContactController::class, 'index'])->name('contact'); 
    
});