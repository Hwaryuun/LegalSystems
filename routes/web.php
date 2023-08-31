<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontTableCTRL;
use App\Http\Controllers\SearchFront;
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


Route::resource('search',SearchFront::class);
Route::get('/', [SearchFront::class,'search']);
Route::get('search', [SearchFront::class, 'search'])->name('search');


Route::get('front/PendingArchives',[FrontTableCTRL::class,'PendingArchives'])->name('PendingArchives');
Route::put('front/PendingArchives/{id}',[FrontTableCTRL::class,'PendingArchivesStore'])->name('PendingArchivesStore');
Route::delete('front/PendingArchives/{id}',[FrontTableCTRL::class,'PendingArchivesDestroy'])->name('PendingArchivesDestroy');
Route::resource('front',FrontTableCTRL::class);
