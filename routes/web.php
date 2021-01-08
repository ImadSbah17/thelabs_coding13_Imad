<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\HomelabsController;
use App\Http\Controllers\ServiceController;
use App\Models\Banner;
use App\Models\Homelabs;
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
    $datas = Homelabs::all();
    $banner = Banner::all();

    return view('pages.home_Labs',compact('datas','banner'));
});

Route::get('/template', function () {
    $datas = Homelabs::all();
    $banner = Banner::all();


    return view('template.template',compact('datas','banner'));
});


// mes routes pour mes pages

Route::resource('/blog-post', BlogpostController::class)->middleware('auth');
Route::resource('/blog', BlogController::class)->middleware('auth');
Route::resource('/contact', ContactController::class)->middleware('auth');
Route::resource('/elements', ElementsController::class)->middleware('auth');
Route::resource('/home_Labs', HomelabsController::class)->middleware('auth');
Route::resource('/service', ServiceController::class)->middleware('auth');

// mes routes pour mon backend






Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
