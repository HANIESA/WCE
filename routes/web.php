<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\ContentController;


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

Auth::routes();

Route::resources([
    'fields'=> FieldController::class,
    'contents'=> ContentController::class,

]);
// Route::get('/fields', [App\Http\Controllers\FieldController::class, 'index'])->name('field.index');
// Route::get('/edit/{id}', [App\Http\Controllers\FieldController::class, 'edit'])->name('field.edit');
// Route::get('/edit/{id}', [App\Http\Controllers\FieldController::class, 'edit'])->name('field.edit');
// Route::get('/create/{template_id}', [App\Http\Controllers\FieldController::class, 'create'])->name('field.create');
// Route::get('/store/{template_id}', [App\Http\Controllers\FieldController::class, 'store'])->name('field.store');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/scrap',[App\Http\Controllers\ScraperController::class, 'index'])->name('scrapper');
Route::get('/{customer_id}', [App\Http\Controllers\HomeController::class, 'engine'])->name('engine');

