<?php

namespace App\Http\Controllers\Frontend;

use App\Models\HomePage;
use App\Models\HomeFeature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function Homesubtitleview(){
        $data['home'] = HomePage::all();
        $data['homefeature'] = HomeFeature::all();
        return view('frontEnd.index', $data);
    }

    public function Homesubtitleadd(){
        $data = HomePage::all();
        return view('frontEnd.add', ['data' => $data]);
    }

    
/*     public function HomeStore(Request $request){

        $data = new HomePage();
        $data->sub_title = $request->sub_title;
        $data->title = $request->title;
        $data->button_text = $request->button_text;
        $data->save();

        $notification = array(
            'message' => ' Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('/home.view')->with($notification); 

    }
 */

 

 public function HomeStore(Request $request){
    HomePage::truncate(); // This will remove all records from the table

    $data = new HomePage();
    $data->sub_title = $request->sub_title;
    $data->title = $request->title;
    $data->button_text = $request->button_text;
    $data->save();

    $notification = array(
        'message' => 'Inserted Successfully',
        'alert-type'=>'success'
    );

    return redirect()->route('home.add')->with($notification); 
}
    
/*     public function Homesubtitleadd(){
        $data['allData']=HomePage::all();
        return view('frontEnd.index',$data);
     } */









}

