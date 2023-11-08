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
use PDF;


class EmployeeSalaryController extends Controller
{
    public function SalaryView(){
        $data['allData']=User::where('usertype','employee')->get();
        return view('backend.employee.employee_salary.employee_salary',$data);
    }

    public function SalaryIncrement($id){
        $data['editData']=User::find($id);
        return view('backend.employee.employee_salary.employee_salary_increment',$data);
    }

    public function SalaryStore(Request $request, $id){

        $user = User::find($id);
        $previous_sallary = $user->salary;
        $present_salary = (float)$previous_sallary+(float)$request->increment_sallary;
        $user->salary = $present_salary;
        $user->save();

        $salaryData = new EmployeeSallaryLog();
        $salaryData->employee_id=$id;
        $salaryData->previous_sallary=$previous_sallary;
        $salaryData->increment_sallary=$request->increment_sallary;
        $salaryData->present_sallary=$present_salary;
        $salaryData->effected_sallary=date('Y-m-d', strtotime($request->effected_sallary));
        $salaryData->save();

        $notification = array(
            'message' => ' Employee Salary Increment Inserted Successfully',
            'alert-type'=>'success'
        );

        return redirect()->route('employee.salary.view')->with($notification); 
    }


    public function SalaryDetails($id){
        $data['details'] = User::find($id);
        $data['salary_log']=EmployeeSallaryLog::where('employee_id',$data['details']->id)->get();
        //dd($data['sallary_log']->toArray());

        return view('backend.employee.employee_salary.employee_salary_details',$data);
    }
}
