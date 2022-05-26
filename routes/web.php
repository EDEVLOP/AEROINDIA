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

//Country
Route::get('/addcountry', [App\Http\Controllers\CountryController::class, 'createCountry'])->name('home');
Route::post('/create_Country_Ins', [App\Http\Controllers\CountryController::class, 'createCountryPOSTIns'])->name('CreateCountryIns');
Route::post('/create_Country_updt', [App\Http\Controllers\CountryController::class, 'createCountryPOSTUDT'])->name('CreateCountryUpdt');
Route::get('/create_Country_dlt/{id}', [App\Http\Controllers\CountryController::class, 'createCountryPOSTDLT'])->name('CreateCountrydlt');
Route::get('/country', [App\Http\Controllers\CountryController::class, 'index'])->name('home');

// *****Currency ADD By Prasant********
Route::get('/currency', [App\Http\Controllers\CurrencyController::class, 'index'])->name('currency');
Route::post('/add-currency', [App\Http\Controllers\CurrencyController::class, 'store'])->name('add-currency');
Route::post('/update-currency/{id}', [App\Http\Controllers\CurrencyController::class, 'update'])->name('update-currency');
Route::get('/delete-currency/{id}', [App\Http\Controllers\CurrencyController::class, 'destroy']);

// *****Currencyrate ADD By Prasant********
Route::get('/currency-exchange', [App\Http\Controllers\ExchangerateController::class, 'createindex']);
Route::post('/currencyrate-exchange', [App\Http\Controllers\ExchangerateController::class, 'exchangetratestore']);
Route::post('/currencyrate-update/{id}', [App\Http\Controllers\ExchangerateController::class, 'exchangetrate'])->name('currency_update');
Route::get('/delete-currency-rate/{id}', [App\Http\Controllers\ExchangerateController::class, 'destroyrate']);


// *****FeeStructure ADD By Prasant********
Route::get('/fee-structure', [App\Http\Controllers\FeestructureController::class, 'createindex']);
Route::post('/fee-structure-add', [App\Http\Controllers\FeestructureController::class, 'feestructurestore']);
Route::post('/feestructure-update/{id}', [App\Http\Controllers\FeestructureController::class, 'feestructureupdate']);
Route::get('/delete-feestructure/{id}', [App\Http\Controllers\FeestructureController::class, 'destroyfeestructure']);




    
//State
Route::get('/addstate',[App\Http\Controllers\StateController::class,'createState'])->name('createState');
Route::post('/create_state_Ins',[App\Http\Controllers\StateController::class,'createStatePostIns'])->name('createStatePostIns');
Route::post('/create_state_Updt',[App\Http\Controllers\StateController::class,'createStatePostUDT'])->name('createStatePostUpdt');
Route::post('/create_state_dlt/{id}',[App\Http\Controllers\StateController::class,'createStatePostDLT'])->name('createStatePostUpdt');


});
 Auth::routes();  