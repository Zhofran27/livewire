<?php

use Illuminate\Support\Facades\Route;
use app\Livewire\Posts\index;

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

//  Route::get('/', function () {
//      return view('welcome');
//  });

//posts index
Route::get('/', App\Livewire\Posts\index::class)->name('posts.index');

//posts create
Route::get('/create', App\Livewire\Posts\Create::class)->name('posts.create');

//posts edit
Route::get('/edit/{id}', App\Livewire\Posts\Edit::class)->name('posts.edit');

