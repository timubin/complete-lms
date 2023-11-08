<?php

namespace App\Http\Controllers\Backend\Employee;

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
use App\Models\Designation;
use App\Models\EmployeeSallaryLog;
use App\Models\EmployeeLeave;
use App\Models\LeavePurpose;
use App\Models\EmployeeAttendance;
use PDF;


class EmployeeAttendanceController extends Controller
{
    public function AttendanceView(){
        $data['allData'] = EmployeeAttendance::select('date')->groupBy('date')->orderBy('id','DESC')->get();
        // $data['allData'] = EmployeeAttendance::orderBy('id','DESC')->get(); //without gorup data
        return view('backend.employee.employee_attendance.employee_attendance_view',$data);
    }

    public function AttendanceAdd(){
        $data['employees']= User::where('usertype','employee')->get();
        return view('backend.employee.employee_attendance.employee_attendance_add',$data);
    }

    public function AttendanceStore(Request $request){

    	EmployeeAttendance::where('date', date('Y-m-d', strtotime($request->date)))->delete();
    	$countemployee = count($request->employee_id);
    	for ($i=0; $i <$countemployee ; $i++) { 
    		$attend_sataus = 'attend_sataus'.$i;
    		$attend = new EmployeeAttendance();
    		$attend->date = date('Y-m-d',strtotime($request->date));
    		$attend->employee_id = $request->employee_id[$i];
    		$attend->attend_sataus = $request->$attend_sataus;
    		$attend->save();
    	} // end For Loop

 		$notification = array(
    		'message' => 'Employee Attendace Data Update Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('employee.attendance.view')->with($notification);
    }// end Method


    public function AttendanceEdit($date){
        $data['editData'] = EmployeeAttendance::where('date',$date)->get();
        $data['employees'] = User::where('usertype','employee')->get();
        return view('backend.employee.employee_attendance.employee_attendance_edit',$data);
    }
    
    public function AttendanceDetails($date){
        $data['details'] = EmployeeAttendance::where('date',$date)->get();
        return view('backend.employee.employee_attendance.employee_attendance_details',$data);
    }

    
    public function AttendanceDelete($date){
        $formattedDate = date('Y-m-d', strtotime($date));
        $attend = EmployeeAttendance::where('date', $formattedDate)->first();
        
        if ($attend) {
            $attend->delete();
            $notification = array(
                'message' => 'Employee Attendance Deleted Successfully',
                'alert-type' => 'success'
            );
        } else {
            $notification = array(
                'message' => 'Employee Attendance Not Found',
                'alert-type' => 'error'
            );
        }
    
        return redirect()->route('employee.attendance.view')->with($notification);
    }
    
}

