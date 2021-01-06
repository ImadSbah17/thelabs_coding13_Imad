<?php

use App\Models\Blog;
use App\Models\Blogpost;
use App\Models\Contact;
use App\Models\Elements;
use App\Models\Homelabs;
use App\Models\Service;
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


// mes routes pour mes pages

Route::resource('/blog-post', Blogpost::class)->middleware('auth');
Route::resource('/blog', Blog::class)->middleware('auth');
Route::resource('/contact', Contact::class)->middleware('auth');
Route::resource('/elements', Elements::class)->middleware('auth');
Route::resource('/home_Labs', Homelabs::class)->middleware('auth');
Route::resource('/service', Service::class)->middleware('auth');

// mes routes pour mon backend






Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
