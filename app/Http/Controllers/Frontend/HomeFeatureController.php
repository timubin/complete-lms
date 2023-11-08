<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HomeFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeFeatureController extends Controller
{

    public function Homesubtitleview(){
        
        $data = HomeFeature::all();
        return view('frontEnd.index', ['data' => $data]);

       
    }

    
    public function HomeFeatureAdd(){
        $featuredata = HomeFeature::all();
        return view('frontEnd.featureAdd', ['featuredata' => $featuredata]);
    } 



    public function HomeFeatureStore(Request $request){

        $data = new HomeFeature();
    
        $data->features_title = $request->features_title;
        $data->features_icon = $request->features_icon;
        $data->features_details = $request->features_details;
        $data->features_btn = $request->features_btn;
    
        $data->save();
    
        $notification = array(
            'message' => 'Feature Inserted Successfully',
            'alert-type'=>'success'
        );
    
        return redirect()->route('home.feature')->with($notification); 
    }



}
