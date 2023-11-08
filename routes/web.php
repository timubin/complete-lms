<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\HomePage;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\Marks\GradeController;
use App\Http\Controllers\Backend\Marks\MarksController;
use App\Http\Controllers\Frontend\HomeFeatureController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\FeeAmountController;
use App\Http\Controllers\Backend\Student\ExamFeeController;
use App\Http\Controllers\Backend\Report\MarkSheetController;
use App\Http\Controllers\Backend\Report\ProfitFeeController;
use App\Http\Controllers\Backend\Account\OtherCostController;
use App\Http\Controllers\Backend\Setup\FeeCategoryController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Account\StudentFeeController;
use App\Http\Controllers\Backend\Report\AttenReportController;
use App\Http\Controllers\Backend\Setup\DesignattionController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Student\MonthlyFeeController;
use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Report\ResultReportController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Employee\EmployeeRegController;
use App\Http\Controllers\Backend\Setup\ClassTimeTableController;
use App\Http\Controllers\Backend\Account\AccoutnSalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;
use App\Http\Controllers\Backend\Employee\MonthlySalaryController;
use App\Http\Controllers\Backend\Employee\EmployeeSalaryController;
use App\Http\Controllers\Backend\Student\RegistrationFeeController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendanceController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin', 'middleware' => ['admin:admin']],function(){
Route::get('/login',[AdminController::class,'loginForm']);
Route::post('/login',[AdminController::class,'store'])->name('admin.login');

});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});







Route::group(['middleware' => 'prevent-back-history'],function(){

/* Route::get('/', function () {
    return view('frontEnd.index');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin.sir_deshboard.deshboard');
    })->name('dashboard');
});


// Route::get('/admin/logout',[AdminController::class, 'Logout'])->name('admin.logout');

Route::get('/admin/logout', [AdminController::class, 'Logout'])
        ->middleware('auth')
        ->name('admin.logout');


Route::group(['middleware'=>'auth'],function(){

// deshboard view controller 



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



// User Management All Routes 

Route::prefix('users')->group(function(){

    Route::get('/view',[UserController::class, 'UserView'])->name('user.view');
    Route::get('/add',[UserController::class, 'UserAdd'])->name('users.add');
    Route::post('/store',[UserController::class, 'UserStore'])->name('users.store');

    Route::get('/edit/{id}',[UserController::class, 'UserEdit'])->name('users.edit');
    Route::post('/update/{id}',[UserController::class, 'UserUpdate'])->name('users.update');
    Route::get('/delete/{id}',[UserController::class, 'UserDelete'])->name('users.delete');


    Route::get('/id',[UserController::class, 'Userip'])->name('users.ip');




});
// user Profile and Change Password
Route::prefix('profile')->group(function(){

    Route::get('/view',[ProfileController::class, 'ProfileView'])->name('profile.view');
    Route::get('/edit',[ProfileController::class, 'ProfileEdit'])->name('profile.edit');
    Route::post('/store',[ProfileController::class, 'ProfileStore'])->name('profile.store');

    Route::get('/password/view',[ProfileController::class, 'passwordView'])->name('password.view');
    Route::post('/password/update',[ProfileController::class, 'passwordUpdate'])->name('password.update');


});
// Home page desing 


Route::get('/', [HomeController::class, 'Homesubtitleview'])->name('home.view');
Route::get('/homeAdd', [HomeController::class, 'HomesubtitleAdd'])->name('home.add');
Route::post('/homeStore',[HomeController::class, 'HomeStore'])->name('home.store');



// Home page Feature url
Route::get('/homefeature', [HomeFeatureController::class, 'HomeFeatureAdd'])->name('home.feature');
Route::post('/homefeatureStore',[HomeFeatureController::class, 'HomeFeatureStore'])->name('home.feature.store');
/* Route::prefix('homepage')->group(function(){
}); */


// user Profile and Change Password
Route::prefix('setups')->group(function(){
//student class route 
    Route::get('student/class/view',[StudentClassController::class, 'ViewStudent'])->name('student.class.view');   
    Route::get('student/class/add',[StudentClassController::class, 'StudentClassAdd'])->name('student.class.add');
    Route::post('student/class/store',[StudentClassController::class, 'StudentClassStore'])->name('store.student.class');
    Route::get('student/class/edit/{id}',[StudentClassController::class, 'StudentClassEdit'])->name('student.class.edit');

    Route::post('student/class/update/{id}',[StudentClassController::class, 'StudentClassUpdate'])->name('update.student.class');
    Route::get('student/class/delete/{id}',[StudentClassController::class, 'StudentClassDelete'])->name('student.class.delete');
    
    // student year route 
    Route::get('student/year/view',[StudentYearController::class, 'ViewYear'])->name('student.year.view');
    Route::get('student/year/add',[StudentYearController::class, 'StudentYearAdd'])->name('student.year.add');
    Route::post('store/student/year',[StudentYearController::class, 'StudentYearStore'])->name('store.student.year');
    
    Route::get('student/year/edit/{id}',[StudentYearController::class, 'StudentYearEdit'])->name('student.year.edit');
    Route::post('update/student/year/{id}',[StudentYearController::class, 'StudentYearUpdate'])->name('update.student.year');
    Route::get('student/year/delete/{id}',[StudentYearController::class, 'StudentYearDelete'])->name('student.year.delete');
    
    // student gorup route 
    Route::get('student/group/view',[StudentGroupController::class, 'ViewGroup'])->name('student.group.view');
    Route::get('student/group/add',[StudentGroupController::class, 'ViewGroupAdd'])->name('student.group.add');
    Route::post('store/student/group',[StudentGroupController::class, 'ViewGroupStore'])->name('store.student.group');
    
    Route::get('student/group/edit/{id}',[StudentGroupController::class, 'ViewGroupEdit'])->name('student.group.edit');
    Route::post('update/student/group/{id}',[StudentGroupController::class, 'ViewGroupUpdate'])->name('update.student.group');
    Route::get('student/group/delete/{id}',[StudentGroupController::class, 'StudentGroupDelete'])->name('student.group.delete');

    // student Shift route 
    Route::get('student/shift/view',[StudentShiftController::class, 'ViewShift'])->name('student.shift.view');
    Route::get('student/shift/add',[StudentShiftController::class, 'StudentShiftAdd'])->name('student.shift.add');
    Route::post('store/student/shift',[StudentShiftController::class, 'StudentShiftStore'])->name('store.student.shift');

    Route::get('student/shift/edit/{id}',[StudentShiftController::class, 'StudentShiftEdit'])->name('student.shift.edit');
    Route::post('student/shift/update/{id}',[StudentShiftController::class, 'StudentShiftUpdate'])->name('update.student.shift');
    Route::get('student/shift/delete/{id}',[StudentShiftController::class, 'StudentShiftDelete'])->name('student.shift.delete');

 // Fee Category 
 Route::get('fee/category/view',[FeeCategoryController::class, 'ViewFeeCat'])->name('fee.category.view');
 Route::get('fee/category/add',[FeeCategoryController::class, 'FeeCatAdd'])->name('fee.category.add');
 Route::post('store/student/fee_cat',[FeeCategoryController::class, 'FeeCatStore'])->name('store.student.fee_cat');
 Route::get('student/fee_cat/edit/{id}',[FeeCategoryController::class, 'FeeCatEdit'])->name('student.fee_cat.edit');

 Route::post('update/student/fee_cat/{id}',[FeeCategoryController::class, 'FeeCatUpdate'])->name('update.student.fee_cat');
 Route::get('student/fee_cat/delete/{id}',[FeeCategoryController::class, 'FeeCatDelete'])->name('student.fee_cat.delete');

 // Fee Category Amount Routes  
 Route::get('fee/amount/view',[FeeAmountController::class, 'ViewFeeAmount'])->name('fee.amount.view');
 Route::get('fee/amount/add',[FeeAmountController::class, 'AddFeeAmount'])->name('fee.amount.add');
 Route::post('store/student/amount',[FeeAmountController::class, 'StoreFeeAmount'])->name('store.student.amount');
 Route::get('fee/amount/edit/{fee_category_id}',[FeeAmountController::class, 'EditFeeAmount'])->name('fee.amount.edit');
 Route::post('update/fee/amount/{fee_category_id}',[FeeAmountController::class, 'UpdateFeeAmount'])->name('update.fee.amount');
 Route::get('fee/amount/details/{fee_category_id}',[FeeAmountController::class, 'DetailsFeeAmount'])->name('fee.amount.details');
 Route::get('fee/amount/delete/{fee_category_id}',[FeeAmountController::class, 'DeleteFeeAmount'])->name('fee.amount.delete');
 
 // Exam Type Routes  
 Route::get('exam/type/view',[ExamTypeController::class, 'ViewExamType'])->name('exam.type.view');
 Route::get('exam/type/add',[ExamTypeController::class, 'AddExamType'])->name('exam.type.add');
 Route::post('store/exam/type',[ExamTypeController::class, 'StoreExamType'])->name('store.exam.type');      
 
 Route::get('student/exam_type/edit/{id}',[ExamTypeController::class, 'EditExamType'])->name('student.exam_type.edit');
 Route::post('update/exam/type/{id}',[ExamTypeController::class, 'UpdateExamType'])->name('update.exam.type');
 Route::get('student/exam_type/delete/{id}',[ExamTypeController::class, 'DeleteExamType'])->name('student.exam_type.delete');


 // School Subject Type Routes  
 Route::get('school/subject/view',[SchoolSubjectController::class, 'ViewSchoolSubject'])->name('school.subject.view');
 Route::get('student/subject/add',[SchoolSubjectController::class, 'AddStudentSubject'])->name('student.subject.add');
 Route::post('store/student/subjet',[SchoolSubjectController::class, 'StoreStudentSubject'])->name('store.student.subjet');      
 
 Route::get('student/subject/edit/{id}',[SchoolSubjectController::class, 'EditExamType'])->name('student.subject.edit');
 Route::post('update/student/subject/{id}',[SchoolSubjectController::class, 'UpdateStudentSubject'])->name('update.student.subject');
 Route::get('student/student/delete/{id}',[SchoolSubjectController::class, 'DeleteStudentSubjet'])->name('student.subject.delete');
 
 
 // Assign Subject  Routes  
  Route::get('assign/subject/view',[AssignSubjectController::class, 'ViewAssignSubject'])->name('assign.subject.view');
  Route::get('assign/subject/add',[AssignSubjectController::class, 'AddAssignSubject'])->name('assign.subject.add');
  Route::post('store/assign/subject',[AssignSubjectController::class, 'StoreAssignSubject'])->name('store.assign.subject');
  Route::get('assign/subject/edit/{class_id}',[AssignSubjectController::class, 'EditAssignSubject'])->name('assign.subject.edit');
  Route::post('assign/subject/update/{class_id}',[AssignSubjectController::class, 'UpdateAssignSubject'])->name('update.assign.subject');
  Route::get('assign/subject/details/{class_id}',[AssignSubjectController::class, 'DetailsAssignSubject'])->name('assign.subject.details');
  Route::get('assign/subject/delete/{fee_category_id}',[AssignSubjectController::class, 'DeleteAssignSubject'])->name('assign.subject.delete');
  
  // Designation Routes  
  Route::get('designation/view',[DesignattionController::class, 'ViewDesignattion'])->name('designation.view');
  Route::get('designation/add',[DesignattionController::class, 'AddDesignattion'])->name('designation.add');
  Route::post('store/designation',[DesignattionController::class, 'StoreDesignattion'])->name('store.designation');      
  
  Route::get('designation/edit/{id}',[DesignattionController::class, 'EditDesignattion'])->name('designation.edit');

  Route::post('update/designation/{id}',[DesignattionController::class, 'UpdateDesignattion'])->name('update.designation');
  Route::get('designation/delete/{id}',[DesignattionController::class, 'DeleteDesignattion'])->name('designation.delete');
  
  
  // Designation Routes  
  Route::get('class/timetable/view',[ClassTimeTableController::class, 'ViewClassTimeTable'])->name('class.timetable.view');

  Route::get('class/timetable/add',[ClassTimeTableController::class, 'AddClassTimetable'])->name('class.timetable.add');
  Route::post('class/timetable/store',[ClassTimeTableController::class, 'StoreClassTimetable'])->name('class.timetable.store');      
  
//   Route::get('designation/edit/{id}',[DesignattionController::class, 'EditDesignattion'])->name('designation.edit');

//   Route::post('update/designation/{id}',[DesignattionController::class, 'UpdateDesignattion'])->name('update.designation');
//   Route::get('designation/delete/{id}',[DesignattionController::class, 'DeleteDesignattion'])->name('designation.delete');
                                     
});




// student management 
Route::prefix('student')->group(function(){
    //student Registration routes
        Route::get('student/reg/view',[StudentRegController::class, 'StudentRegView'])->name('student.registration.view');
        Route::get('reg/add',[StudentRegController::class, 'StudentRegAdd'])->name('student.registration.add');
        Route::post('reg/store',[StudentRegController::class, 'StudentRegStore'])->name('store.student.registration');
        
        //year and name wise search

      Route::get('year/class/wise',[StudentRegController::class, 'StudentClassYearWise'])->name('student.year.class.wise');
      Route::get('registration/edit/{student_id}',[StudentRegController::class, 'StudentRegEdit'])->name('student.registration.edit');       
      Route::post('update/registration/{student_id}',[StudentRegController::class, 'StudentRegUpdate'])->name('update.student.registration');
      Route::get('registration/delete/{student_id}',[StudentRegController::class, 'StudentRegDelete'])->name('student.registration.delete');
      Route::get('registration/promotion/{student_id}',[StudentRegController::class, 'StudentRegPromotion'])->name('student.registration.promotion');
      Route::post('reg/update/promotion/{student_id}',[StudentRegController::class, 'StudentUpdataPromotion'])->name('promotion.student.registration');
      Route::get('reg/details/promotion/{student_id}',[StudentRegController::class, 'StudentRegDetails'])->name('details.student.registration');
      
      /* student Roll gererate   route*/
      Route::get('roll/generate/view',[StudentRollController::class, 'StudentRollView'])->name('roll.generate.view');

      Route::get('reg/getstudents',[StudentRollController::class, 'GetStudent'])->name('student.registration.getstudents');
      Route::post('roll/generate/store',[StudentRollController::class, 'StudentRollStore'])->name('roll.generate.store');


      /* student Registration Fee  route*/
      Route::get('reg/fee/view',[RegistrationFeeController::class, 'RegFeeView'])->name('registration.fee.view');
      Route::get('reg/fee/classwisedata',[RegistrationFeeController::class, 'RegFeeClassData'])->name('student.registration.fee.classwise.get');
      Route::get('reg/fee/payslip',[RegistrationFeeController::class, 'RegFeePayslip'])->name('student.registration.fee.payslip');
 
      /* student Monthly Fee  route*/
      Route::get('monthly/fee/view',[MonthlyFeeController::class, 'MonthlyFeeView'])->name('monthly.fee.view');
      Route::get('monthly/fee/classwisedata',[MonthlyFeeController::class, 'MonthlyFeeClassData'])->name('student.monthly.fee.classwise.get');
      Route::get('monthly/fee/payslip',[MonthlyFeeController::class, 'MonthlyFeePayslip'])->name('student.monthly.fee.payslip');


      /* student exam Fee  route*/
      Route::get('exam/fee/view',[ExamFeeController::class, 'ExamFeeView'])->name('exam.fee.view');
      Route::get('student/fee/classwisedata',[ExamFeeController::class, 'ExamFeeClassData'])->name('student.exam.fee.classwise.get');
      Route::get('exam/fee/payslip',[ExamFeeController::class, 'ExamFeePayslip'])->name('student.exam.fee.payslip');



    });


// Employess Management Registration Routes
Route::prefix('employess')->group(function(){

    Route::get('reg/employee/view',[EmployeeRegController::class, 'EmployeeView'])->name('employee.registration.view');
    Route::get('reg/employee/add',[EmployeeRegController::class, 'EmployeeAdd'])->name('employee.registration.add');
    Route::post('reg/employee/store',[EmployeeRegController::class, 'EmployeeStore'])->name('store.employee.registration');
    
    Route::get('reg/employee/edit/{id}',[EmployeeRegController::class, 'EmployeeEdit'])->name('employee.registration.edit');
    Route::post('reg/employee/update/{id}',[EmployeeRegController::class, 'EmployeeUpdate'])->name('update.employee.registration');
    Route::get('reg/employee/delete/{id}',[EmployeeRegController::class, 'EmployeeDelete'])->name('employee.registration.delete');
    Route::get('reg/employee/details/{id}',[EmployeeRegController::class, 'EmployeeDetails'])->name('employee.registration.details');
    

    
    //Employess salary route  

    Route::get('employee/salary/view',[EmployeeSalaryController::class, 'SalaryView'])->name('employee.salary.view');
    Route::get('employee/salary/increment/{id}',[EmployeeSalaryController::class, 'SalaryIncrement'])->name('employee.salary.increment');
    Route::post('employee/salary/store/{id}',[EmployeeSalaryController::class, 'SalaryStore'])->name('update.increment.store');
    Route::get('employee/salary/details/{id}',[EmployeeSalaryController::class, 'SalaryDetails'])->name('employee.salary.details');
   
   
    //Employess Leave All route  
    Route::get('leave/employee/view',[EmployeeLeaveController::class, 'LeaveView'])->name('employee.leave.view'); 
    Route::get('leave/employee/add',[EmployeeLeaveController::class, 'LeaveAdd'])->name('employee.leave.add');
    Route::post('leave/employee/store',[EmployeeLeaveController::class, 'LeaveStore'])->name('store.employee.leave');
    Route::get('leave/employee/edit/{id}',[EmployeeLeaveController::class, 'LeaveEdit'])->name('employee.leave.edit');
    Route::post('leave/employee/update/{id}',[EmployeeLeaveController::class, 'LeaveUpdate'])->name('update.employee.leave');
    Route::get('leave/employee/delete/{id}',[EmployeeLeaveController::class, 'LeaveDelete'])->name('employee.leave.delete');
    
    //Employess Attendance All route  
    Route::get('attendance/employee/view',[EmployeeAttendanceController::class, 'AttendanceView'])->name('employee.attendance.view');
    Route::get('attendance/employee/add',[EmployeeAttendanceController::class, 'AttendanceAdd'])->name('employee.attendance.add');
    Route::post('attendance/employee/store',[EmployeeAttendanceController::class, 'AttendanceStore'])->name('store.employee.attendance');
    
    Route::get('attendance/employee/edit/{date}',[EmployeeAttendanceController::class, 'AttendanceEdit'])->name('employee.attendance.edit');
    Route::get('attendance/employee/delete/{date}',[EmployeeAttendanceController::class, 'AttendanceDelete'])->name('employee.attendance.delete');
    Route::get('attendance/employee/details/{date}',[EmployeeAttendanceController::class, 'AttendanceDetails'])->name('employee.attendance.details');
    
    //Employess Monthly Seleary
    Route::get('monthly/salary/view',[MonthlySalaryController::class, 'MonthlySalaryView'])->name('employee.monthly.salary');
    Route::get('monthly/salary/get',[MonthlySalaryController::class, 'MonthlySalaryGet'])->name('employee.monthly.salary.get');
    Route::get('monthly/salary/payslip/{employee_id}',[MonthlySalaryController::class, 'MonthlySalaryPayslip'])->name('employee.monthly.salary.payslip');
});


// Student Marks 
Route::prefix('marks')->group(function(){

   /*  mark Entry  */

    Route::get('marks/entry/add',[MarksController::class, 'MarksAdd'])->name('marks.entry.add');
    
    Route::post('marks/entry/store',[MarksController::class, 'MarksStore'])->name('marks.entry.store');
    
    Route::get('marks/entry/edit',[MarksController::class, 'MarksEdit'])->name('marks.entry.edit');
    
    Route::get('student/marks/getstudents',[MarksController::class, 'MarksGetstudents'])->name('student.edit.getstudents');
    
    Route::post('student/marks/update',[MarksController::class, 'MarksUpdate'])->name('marks.entry.update');
    
    
    /*  Mark Entry grate */
    Route::get('marks/grade/view',[GradeController::class, 'MarksGrateView'])->name('marks.entry.grate');
    Route::get('marks/grade/add',[GradeController::class, 'MarksGrateAdd'])->name('marks.grade.add');
    Route::post('marks/grade/store',[GradeController::class, 'MarksGrateStore'])->name('store.marks.grade');
    Route::get('marks/grade/edit/{id}',[GradeController::class, 'MarksGrateEdit'])->name('marks.grate.edit');
    Route::post('marks/grade/update/{id}',[GradeController::class, 'MarksGrateUpdate'])->name('update.marks.grade');
    Route::get('marks/grade/delete/{id}',[GradeController::class, 'MarksGrateDelete'])->name('marks.grate.delete');
    
});


// Account Managemetn route 
Route::prefix('accounts')->group(function(){

   /*  Student fee view   */

    Route::get('student/fee/view',[StudentFeeController::class, 'StudentFeeView'])->name('student.fee.view');
    Route::get('student/fee/add',[StudentFeeController::class, 'StudentFeeAdd'])->name('student.fee.add');
    Route::get('student/fee/getstudent',[StudentFeeController::class, 'StudentFeeGetStudent'])->name('account.fee.getstudent');
    
    Route::post('student/fee/store',[StudentFeeController::class, 'StudentFeeStore'])->name('account.fee.store');
    
   /*  Eployee salary   */

    Route::get('accoutn/salary/view',[AccoutnSalaryController::class, 'AccountSalaryView'])->name('account.salary.view');
    Route::get('accoutn/salary/add',[AccoutnSalaryController::class, 'AccountSalaryAdd'])->name('account.salary.add');
    Route::get('accoutn/salary/getemployee',[AccoutnSalaryController::class, 'AccountSalaryGetEmployee'])->name('account.salary.getemployee');
    Route::post('accoutn/salary/store',[AccoutnSalaryController::class, 'AccountSalaryStore'])->name('account.salary.store');
    
   /*  Other coust salary   */

    Route::get('other/cost/view',[OtherCostController::class, 'OtherCostView'])->name('other.cost.view');
    Route::get('other/cost/add',[OtherCostController::class, 'OtherCostAdd'])->name('other.cost.add');
    Route::post('other/cost/store',[OtherCostController::class, 'OtherCostStore'])->name('store.other.cost');
    Route::get('other/cost/edit/{id}',[OtherCostController::class, 'OtherCostEdit'])->name('edit.other.cost');
    Route::post('other/cost/update/{id}',[OtherCostController::class, 'OtherCostUpdate'])->name('update.other.cost');
    Route::get('other/cost/delete/{id}',[OtherCostController::class, 'OtherCostDelete'])->name('delete.other.cost');

});


// Report Managemetn route 
Route::prefix('reports')->group(function(){

   /*  Monthly Profite View   */

    Route::get('monthly/profit/view',[ProfitFeeController::class, 'MonthlyProfitView'])->name('monthly.profit.view');
    Route::get('monthly/profit/datewais',[ProfitFeeController::class, 'MonthlyProfitDatewais'])->name('report.profit.datewais.get');
    Route::get('report/profit/pdf',[ProfitFeeController::class, 'MonthlyProfitPdf'])->name('report.profit.pdf');
    
    // marksheet Generate view
    Route::get('marksheet/generate/view',[MarkSheetController::class, 'MarkSheetView'])->name('marksheet.generate.view');
    Route::get('marksheet/generate/get',[MarkSheetController::class, 'MarkSheetGet'])->name('report.marksheet.get');
  
  
    // Attendance Report view
    Route::get('attendance/report/view',[AttenReportController::class, 'AttenReportView'])->name('attendance.report.view');
    Route::get('report/attendance/get',[AttenReportController::class, 'AttenReportGet'])->name('report.attendance.get');
 
 
    // Student Result  Report 
    Route::get('student/result/view',[ResultReportController::class, 'ResultView'])->name('student.result.view');
    Route::get('student/result/get',[ResultReportController::class, 'ResultGet'])->name('report.student.result.get');
   
 
    // Student Id Card Routes 
    Route::get('student/idcard/view',[ResultReportController::class, 'IdcardView'])->name('student.idcard.view');
    Route::get('student/idcard/get',[ResultReportController::class, 'IdcardGet'])->name('report.student.idcard.get');
   
   



});










Route::get('marks/getsubject',[DefaultController::class, 'GetSubject'])->name('marks.getsubject');
Route::get('student/marks/getsubject',[DefaultController::class, 'GetStudents'])->name('student.marks.getstudents');
















}); //End Middle Auth Route 

}); // Prevent Back Middleare