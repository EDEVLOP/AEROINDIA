<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Models\Country;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $country = Country::all();
        $currency = Currency::all();

       

        return view('admin.AdminCurrency',compact('country','currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $currency = new Currency;
        $currency->vch_countryid = $request->input('countrystatusddl');
        $currency->vch_currencycode = $request->input('currencycode');
        $currency->vch_currencyname = $request->input('currencyname');
        $currency->vch_status = $request->input('currencystatusddl');   
        $currency->save();
        return redirect()->back()->with('message','Currency Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $currency_f = Currency::find($id);
        // dd($currency_f);
        return view('admin.AdminCurrency', compact('currency_f'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currency $currency)
    {
        //
    }
}
