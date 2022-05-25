<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware(['auth'])->name('admin.')->prefix('')->group(function() {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/country', [App\Http\Controllers\CountryController::class, 'index'])->name('home');

// *****Currency ADD By Prasant********
Route::get('/currency', [App\Http\Controllers\CurrencyController::class, 'index'])->name('currency');
Route::post('/add-currency', [App\Http\Controllers\CurrencyController::class, 'store'])->name('add-currency');
Route::post('/edit-currency/{id}', [App\Http\Controllers\CurrencyController::class, 'show'])->name('edit-currency');



    
});
 Auth::routes();  