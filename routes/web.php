<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/rule',[RuleController::class,'index'])->name('rule');
Route::get('/article',[ArticleController::class,'index'])->name('article');
