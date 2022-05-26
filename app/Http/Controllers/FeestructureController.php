<?php

namespace App\Http\Controllers;

use App\Models\Feestructure;
use App\Models\Currency;
use Illuminate\Http\Request;

class FeestructureController extends Controller
{
   
    public function createindex()
    {

        $currency = Currency::all();
        $feestructure = Feestructure::all();

        return view('admin.AdminFeestructure',compact('currency','feestructure'));
    }

   
    public function create()
    {
        //
    }

   
    public function feestructurestore(Request $request)
    {
        // dd($request->all());
        $feestructure = new Feestructure;
        $feestructure->vch_membercategory = $request->input('membershipcate');
        $feestructure->vch_currencyname = $request->input('currencyname');
        $feestructure->vch_membershipamount = $request->input('membershipamount');
        $feestructure->vch_status = $request->input('memberstatusddl');   
        $feestructure->save();
        notify()->success('Feestructure Added Sucessfully!');
        return redirect()->back();
    }

    public function feestructureupdate(Request $request,$id)
    {
        // $now=date('Y-m-d h:i:s', time());
        // dd($now);
        $feestructure = Feestructure::find($id);
        $feestructure->vch_membercategory = $request->input('uptmembershipcate');
        $feestructure->vch_currencyname = $request->input('uptcurrencyname');
        $feestructure->vch_membershipamount = $request->input('membershipamount');
        $feestructure->vch_status = $request->input('udtmemberstatu'); 
        $feestructure->updated_at = now();
        $feestructure->update();
        notify()->success('Feestructure updated Sucessfully!');
        return redirect()->back();
    }

    
    public function destroy(Feestructure $feestructure)
    {
        //
    }
}
