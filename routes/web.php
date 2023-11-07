<?php

use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\FrontController;
use App\Models\Category;

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

//ROUTE HOMEPAGE

Route::get('/', [FrontController::class, 'homepage'])->name('homepage');

//ROUTE CATEGORIES

Route::get('/categorie/{category}', [FrontController::class,'categoryShow'])->name('category.show');

//ROUTE ANNOUNCEMENTS


Route::get('/nuovo/annuncio', [AnnouncementController::class, 'createAnnouncement'])->middleware('auth')->name('announcements.create');
Route::get('/annunci/{announcement}', [AnnouncementController::class, 'showAnnouncement', ])->name('announcements.show');
Route::get('/annunci', [AnnouncementController::class, 'index'])->name('announcements.index');

//ROUTE SEARCH ANNOUNCEMENTS

Route::get('/ricerca/annuncio', [FrontController::class, 'searchAnnouncements'])->name('announcements.search');

//ROUTE REVISOR

Route::get('/richiesta/revisore', [RevisorController::class, 'becomeRevisor'])->middleware('auth')->name('become.revisor');
Route::get('/rendi/revisore/{user}', [RevisorController::class, 'makeRevisor'])->middleware('auth')->name('make.revisor');
Route::get('/revisor/home',[RevisorController::class, 'index'])->middleware('isRevisor')->name('revisor.index');