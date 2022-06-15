<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ProjectsController;
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

Route::redirect('/', '/ru');

Route::group(['prefix' => '{lang}'], function () {
  Route::get('/', [MainController::class, 'index'])->name('home');
  Route::get('/about/{category}', [AboutController::class, 'index'])->name('about');
  Route::get('/about/news/{slug}', [AboutController::class, 'index'])->name('about.news.show');
  Route::get('/projects/{category?}', [ProjectsController::class, 'index'])->name('projects');
  Route::get('/partnership/{category}', [PartnershipController::class, 'index'])->name('partnership');
  Route::get('/contribution', [ContributionController::class, 'index'])->name('contribution');
  Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
  Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier');
});
