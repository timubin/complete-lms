<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\StudentClass;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Models\ClassTimeTable;
use App\Http\Controllers\Controller;

class ClassTimeTableController extends Controller
{
    function ViewClassTimeTable(){
        $data['classes'] = StudentClass::all();
        $data['subject'] = SchoolSubject::all();
        return view('backend.setup.class_timetable.timetable_view',$data);

    }
    function AddClassTimetable(){
        return view('backend.setup.class_timetable.timetable_add');
        
    }

    public function StoreClassTimetable(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:class_time_tables,name',
        ]);

        $data = new ClassTimeTable();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Class Time Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('timetable.view')->with($notification); 


    }


}
