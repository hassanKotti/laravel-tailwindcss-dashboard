<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ContactController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::resource('/contacts', ContactController::class)->name('index', 'contacts');
Route::resource('/organizations', OrganizationController::class)->name('index', 'organizations');

Route::get('/reports', function () {
    return view('reports.index');
})->middleware(['auth'])->name('reports');
Route::get('/resources', function () {
    return view('resources.index');
})->middleware(['auth'])->name('resources');

require __DIR__ . '/auth.php';
