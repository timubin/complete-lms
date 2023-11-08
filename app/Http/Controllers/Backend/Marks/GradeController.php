<?php

namespace App\Http\Controllers\Backend\Marks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\AssignStudent;
use App\Models\DiscountStudent;
use App\Models\StudentMarks;
use App\Models\ExamType;
use App\Models\MarksGrade;
use PDF;

class GradeController extends Controller
{
    public function MarksGrateView(){
        $data['allData'] = MarksGrade::all();
        return view('backend.marks.grade_marks_view',$data);
    }

    public function MarksGrateAdd(){

        return view('backend.marks.grade_marks_add');
    }

    public function MarksGrateStore(Request $request){
        $data = new MarksGrade();
        $data->grade_name = $request->grade_name;
        $data->grade_point= $request->grade_point;
        $data->start_marks = $request->start_marks;
        $data->end_marks = $request->end_marks;
        $data->start_point = $request->start_point;
        $data->end_point = $request->end_point;
        $data->remarks = $request->remarks;
        $data->save();

        $notification = array(
            'message' => 'Grade Marks Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('marks.entry.grate')->with($notification);


    }//end method 


    public function MarksGrateEdit($id){
        $data['editData'] = MarksGrade::find($id);
        return view('backend.marks.grade_marks_edit',$data);
    }

    public function MarksGrateUpdate(Request $request, $id){

        $data =MarksGrade::find($id);
        $data->grade_name = $request->grade_name;
        $data->grade_point= $request->grade_point;
        $data->start_marks = $request->start_marks;
        $data->end_marks = $request->end_marks;
        $data->start_point = $request->start_point;
        $data->end_point = $request->end_point;
        $data->remarks = $request->remarks;
        $data->save();

        $notification = array(
            'message' => 'Grade Marks Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('marks.entry.grate')->with($notification);

    }


    public function MarksGrateDelete($id){
        $data =MarksGrade::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Grade Marks Deleted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('marks.entry.grate')->with($notification);

    }
}
