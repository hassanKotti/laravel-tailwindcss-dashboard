<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrganizationController;
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

Route::get('/contacts', function () {
    return view('contacts');
})->middleware(['auth'])->name('contacts');


Route::resource('/organizations', OrganizationController::class)->name('index', 'organizations');

Route::get('/reports', function () {
    return view('reports');
})->middleware(['auth'])->name('reports');

require __DIR__ . '/auth.php';
