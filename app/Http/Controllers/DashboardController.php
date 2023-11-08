<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\AccountOtherCost;
use App\Models\AccountStudentFee;
use App\Models\AccountEmployeeSalary;
class DashboardController extends Controller
{
    

    public function index()
    {
        $totalStudents = User::where('usertype', 'Student')->count();
        $totalUser = User::where('usertype', 'employee')->count();
        $profit = $this->calculateProfit(); 
        return view('admin.index', compact('totalStudents', 'totalUser', 'profit'));
    }

    private function calculateProfit() {
        // Implement your profit calculation logic here
        // For example:
        $studentFee = AccountStudentFee::sum('amount');
        $otherCost = AccountOtherCost::sum('amount');
        $empSalary = AccountEmployeeSalary::sum('amount');
        $totalCost = $otherCost + $empSalary;
        $profit = $studentFee - $totalCost;

        return $profit;
    }
        

}
