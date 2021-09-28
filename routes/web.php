<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortFolioController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/blog',[BlogController::class,'index'])->name('blog');
Route::get('/blog-details/{slug}', [BlogController::class,'details'])->name("blog-details");
Route::get('/port-folio',[PortFolioController::class,'index'])->name('port-folio');
Route::get('/port-folio/{slug}',[PortFolioController::class,'details'])->name('port-folio-details');

Route::post("/contact",[ContactController::class, 'send'])->name("contact");


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
