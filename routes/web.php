<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\Aboutcontoller;
use App\Http\Controllers\Frontend\Blog_detailscontoller;
use App\Http\Controllers\Frontend\Blogcontoller;
use App\Http\Controllers\Frontend\Contactcontoller;
use App\Http\Controllers\Frontend\Elementscontoller;
use App\Http\Controllers\Frontend\indexcontoller;
use App\Http\Controllers\Frontend\Projectcontoller;
use App\Http\Controllers\Frontend\whatcontoller;
use App\Http\Controllers\Frontend\logincontoller;
use App\Http\Controllers\Frontend\registrationcontoller;
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
Route::get('/',[indexcontoller::class,'open']);
Route::get('/about',[Aboutcontoller::class,'open']);
Route::get('/blog_details',[Blog_detailscontoller::class,'open']);
Route::get('/blog',[Blogcontoller::class,'open']);
Route::get('/contact',[contactcontoller::class,'open']);
Route::get('/elements',[Elementscontoller::class,'open']);
Route::get('/projects',[Projectcontoller::class,'open']);
Route::get('/what',[whatcontoller::class,'open']);
Route::get('/login',[logincontoller::class,'open']);
Route::get('/registration',[registrationcontoller::class,'open']);

