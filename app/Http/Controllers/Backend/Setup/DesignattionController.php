<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignattionController extends Controller
{
    public function ViewDesignattion (){
        $data['allData']=Designation::all();
        return view('backend.setup.designation.view_designation',$data);
    }

    public function AddDesignattion(){
        return view('backend.setup.designation.add_designation');
    }

    public function StoreDesignattion(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:designations,name',
        ]);

        $data = new Designation();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Student Exam Type Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('designation.view')->with($notification); 


    }


    public function EditDesignattion($id){
        $editData= Designation::find($id);
        return view('backend.setup.designation.edit_designation',compact('editData'));
    }

    public function UpdateDesignattion(Request $request,$id){
        $data =Designation::find($id);
        $validatedData = $request->validate([
            'name'=>'required|unique:designations,name,'.$data->id,
        ]);        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Exam Type Update Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('designation.view')->with($notification); 
    }


    public function DeleteDesignattion($id){
        $user = Designation::find($id);
        $user->delete();
        $notification = array(
            'message' => 'Exam Type Deleted Successfully',
            'alert-type'=>'info'
        );

        return redirect()->route('designation.view')->with($notification); 
    }

}
