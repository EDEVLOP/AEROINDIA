<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;



// Route::get('/', function () {
//     return view('welcome');
// });



Route::middleware(['auth'])->name('admin.')->prefix('')->group(function() {
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Country ---- Added by Sunil 25/05/2022 ----
Route::get('/addcountry', [App\Http\Controllers\CountryController::class, 'createCountry'])->name('home');
Route::post('/create_Country_Ins', [App\Http\Controllers\CountryController::class, 'createCountryPOSTIns'])->name('CreateCountryIns');
Route::post('/create_Country_updt', [App\Http\Controllers\CountryController::class, 'createCountryPOSTUDT'])->name('CreateCountryUpdt');
Route::get('/create_Country_dlt/{id}', [App\Http\Controllers\CountryController::class, 'createCountryPOSTDLT'])->name('CreateCountrydlt');
// Route::get('/country', [App\Http\Controllers\CountryController::class, 'index'])->name('home');


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





//State ---- Added by Sunil 25/05/2022 ----
Route::get('/addstate',[App\Http\Controllers\StateController::class,'createState'])->name('createState');
Route::post('/create_state_Ins',[App\Http\Controllers\StateController::class,'createStatePostIns'])->name('createStatePostIns');
Route::post('/create_state_Updt',[App\Http\Controllers\StateController::class,'createStatePostUDT'])->name('createStatePostUpdt');
Route::get('/create_state_dlt/{id}',[App\Http\Controllers\StateController::class,'createStatePostDLT'])->name('createStatePostUpdt');


//City ---- Added by Sunil 26/05/2022 ----
Route::get('/addcity',[App\Http\Controllers\CityController::class,'createCity'])->name('createCity');
Route::post('/create_city_Ins',[App\Http\Controllers\CityController::class,'createCityPostIns'])->name('createCityPostIns');
Route::post('/create_city_Updt',[App\Http\Controllers\CityController::class,'createCityPostUDT'])->name('createCityPostUpdt');
Route::get('/create_city_dlt/{id}', [App\Http\Controllers\CityController::class, 'createCityPOSTDLT'])->name('createCityPOSTDLT');


//Profession-Designation ---- Added by Sunil 26/05/2022 ----
Route::get('/addprofesstionalDesignation',[App\Http\Controllers\ProfessionalDesignationController::class,'createprofesstionaldesig'])->name('createprofesstionaldesig');
Route::post('/create_professtionalDesignation_Ins',[App\Http\Controllers\ProfessionalDesignationController::class,'createprofDesigPostIns'])->name('createprofDesigPostIns');
Route::post('/create_professtionalDesignation_Updt',[App\Http\Controllers\ProfessionalDesignationController::class,'createprofDesigPostUDT'])->name('createprofDesigPostUDT');
Route::get('/create_professtionalDesignation_dlt/{id}', [App\Http\Controllers\ProfessionalDesignationController::class, 'createprofDesigPOSTDLT'])->name('createprofDesigPOSTDLT');


//Qualification Master  ---- Added by Sunil 26/05/2022 ----
Route::get('/addqualificationmaster',[App\Http\Controllers\QualificationmasterController::class,'createqulificationdetails'])->name('createqulificationdetails');
Route::post('/create_qualificationmaster_Ins',[App\Http\Controllers\QualificationmasterController::class,'createqulificationPOSTINS'])->name('createqulificationPOSTINS');
Route::post('/create_qualificationmaster_Updt',[App\Http\Controllers\QualificationmasterController::class,'createqulificationPostUDT'])->name('createqulificationPostUDT');
Route::get('/create_qualificationmaster_dlt/{id}', [App\Http\Controllers\QualificationmasterController::class, 'createqulificationPOSTDLT'])->name('createqulificationPOSTDLT');

//Membertype Master ---- Added by Sunil 26/05/2022 ----
Route::get('/addmembertypemaster',[App\Http\Controllers\MembertypemasterController::class,'createmembertypemaster'])->name('createmembertypemaster');
Route::post('/create_membertypemaster_Ins',[App\Http\Controllers\MembertypemasterController::class,'createmembertypemasterPOSTINS'])->name('createmembertypemasterPOSTINS');
Route::post('/create_membertypemaster_Updt',[App\Http\Controllers\MembertypemasterController::class,'createmembertypemasterPOSTUDT'])->name('createmembertypemasterPOSTUDT');
Route::get('/create_membertypemaster_dlt/{id}', [App\Http\Controllers\MembertypemasterController::class, 'createmembertypemasterPOSTDLT'])->name('createmembertypemasterPOSTDLT');


});
 Auth::routes();  