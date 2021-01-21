<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BannerimgController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogpostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContacthomeController;
use App\Http\Controllers\ElementsController;
use App\Http\Controllers\HomelabsController;
use App\Http\Controllers\PresentationFoMyHomeController;
use App\Http\Controllers\ReadyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicevraiController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use App\Models\Banner;
use App\Models\Bannerimg;
use App\Models\Homelabs;
use App\Models\PresentationFoMyHome;
use App\Models\Servicevrai;
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

// Route::get('/', function () {
//     $datas = Homelabs::all();
//     $banner = Banner::all();

//     return view('pages.home_Labs',compact('datas','banner'));
// });

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

Route::resource('/caroussel', BannerimgController::class)->middleware('auth');
Route::resource('banner',BannerController::class);
Route::resource('/presentationHome',PresentationFoMyHomeController::class)->middleware('auth');
Route::resource('/testimonial',TestimonialController::class)->middleware('auth');
Route::resource('/servicevrai',ServicevraiController::class)->middleware('auth');
Route::resource('/ready',ReadyController::class)->middleware('auth');
Route::resource('/contactHOME',ContacthomeController::class)->middleware('auth');
Route::resource('/video',VideoController::class)->middleware('auth');













Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
