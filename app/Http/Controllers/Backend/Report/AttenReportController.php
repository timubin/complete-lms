<?php

namespace App\Http\Controllers\Backend\Report;

use Dompdf\Dompdf;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeAttendance;
use App\Http\Controllers\Controller;

class AttenReportController extends Controller
{
    public function AttenReportView(){
       $data['employees'] = User::where('usertype','employee')->get();
       return view('backend.report.attend_report.attend_report_view',$data);
    }

    public function AttenReportGet(Request $request){
        $employee_id = $request->employee_id;
        if($employee_id != ''){
            $where[] =['employee_id',$employee_id];
        }
        $date=date('Y-m',strtotime($request->date));
        if($date != ''){
            $where[]=['date','like',$date.'%'];
        }
        $singleAttendance = EmployeeAttendance::with(['user'])->where($where)->get();

        if($singleAttendance == true){
            $data['allData']=EmployeeAttendance::with(['user'])->where($where)->get();
            // dd($data['allData']->toArray());
            $data['absents'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_sataus','Absent')->get()->count();
            $data['leaves'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_sataus','Leave')->get()->count();
            $data['month'] =date('m-Y',strtotime($request->date));

            $html = view('backend.report.attend_report.attend_report_pdf', $data)->render();

            $pdf = new Dompdf();
            $pdf->loadHtml($html);
            $pdf->setPaper('A4', 'landscape');
            $pdf->render();
            $pdf->stream('invoice.pdf', array("Attachment" => false));
        }else{
            $notification = array(
                'message' => ' Sorry These Criteria Dose not match',
                'alert-type'=>'error'
            );
    
            return redirect()->back()->with($notification); 
        }
    }
}
