<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentsController;

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

Route::get('/new', [ContentsController::class, 'new'])->middleware(['auth', 'verified'])->name('new');
Route::post('/save', [ContentsController::class, 'save'])->middleware(['auth', 'verified'])->name('save');
Route::get('/contentlist', [ContentsController::class, 'getContentList'])->name('contentlist');

require __DIR__.'/auth.php';
