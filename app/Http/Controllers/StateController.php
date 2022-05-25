<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\Country;
use Illuminate\Support\Facades\Crypt;

class StateController extends Controller
{
    public function createState()
    {
        $countryfetch=Country::all();
        $statedatafetch=State::orderBy('id','DESC')->get();
        return view('admin.AdminState',compact('countryfetch'),compact('statedatafetch'));
    }
    public function createStatePostIns(Request $request)
    {
        $post=new State;
        $post->Int_CountryID=$request->Countryddl;
        $post->vch_statecode=$request->Statecodetxt;
        $post->vch_statename=$request->Statenametxt;
        $post->vch_statestatus=$request->Statestatusddl;

        $post->save();
        notify()->success('State added sucessfully!');
        return redirect('/addstate');
    }
    public function createStatePostUDT(Request $request)
    {
        $post=State::where('id',$request->id)->update([
            'Int_CountryID'=>$request->udtCountryddl,
            'vch_statecode'=>$request->UDTStatecodetxt,
            'vch_statename'=>$request->UDTStatenametxt,
            'vch_statestatus'=>$request->udtStatestatusddl
        ]);
        notify()->success('State updated sucessfully!');
        return redirect('/addstate');
    }
}
