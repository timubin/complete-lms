<?php

namespace App\Http\Controllers\Backend\Setup;

use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Http\Controllers\Controller;

class SchoolSubjectController extends Controller
{
    public function ViewSchoolSubject (){
        $data['allData']=SchoolSubject::all();
        return view('backend.setup.school_subject.view_school_subject',$data);
    }

    public function AddStudentSubject(){
        return view('backend.setup.school_subject.add_school_subject');
    }

    public function StoreStudentSubject(Request $request){
        $validatedData = $request->validate([
            'name'=>'required|unique:school_subjects,name',
        ]);

        $data = new SchoolSubject();
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Student Subject Inserted Successfully',
            'alert-type'=>'success'
        );
        return redirect()->route('school.subject.view')->with($notification); 


    }


    public function EditExamType($id){
        $editData= SchoolSubject::find($id);
        return view('backend.setup.school_subject.edit_school_subject',compact('editData'));
    }

    public function UpdateStudentSubject(Request $request,$id){
        $data =SchoolSubject::find($id);
        $validatedData = $request->validate([
            'name'=>'required|unique:school_subjects,name,'.$data->id,
        ]);        
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Studnet Subject Update Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('school.subject.view')->with($notification); 
    }


    public function DeleteStudentSubjet($id){
        $user = SchoolSubject::find($id);
        $user->delete();
        $notification = array(
            'message' => 'Exam Type Deleted Successfully',
            'alert-type'=>'info'
        );

        return redirect()->route('school.subject.view')->with($notification); 
    }

}
