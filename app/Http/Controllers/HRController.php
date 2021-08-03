<?php

namespace App\Http\Controllers;

use App\CheckInOut;
use App\Departments;
use App\Employees;
use App\Shifts;
use Illuminate\Http\Request;

class HRController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function AllEmployees()
    {
        $emp = Employees::with('departments')->get();
        return view("admin.employees" , compact('emp'));
    }

    public function showShifts()
    {
        $shifts = Shifts::all();
        return view("admin.shifts" , compact('shifts'));
    }

    public function createShift()
    {
        return view("admin.create-shift");
    }
    public function editShift($id)
    {
        $shift = Shifts::find($id);
        return view("admin.edit-shift" , compact('shift'));
    }

    public function assignShifts()
    {

    }

    public function saveEditShift()
    {
        $shift = Shifts::where('ID' , \request('shiftid'))->first();
        $shift->SHIFT_NAME = \request('shift');
        $shift->SHIFT_START = \request('starttime');
        $shift->SHIFT_END = \request('endtime');
        $shift->NEXT_DAY_END = \request('nextday') == 'on' ? 1 : 0;
        $shift->START_GRACE_TIME = \request('start_grace');
        $shift->END_GRACE_TIME = \request('end_grace');
        $shift->save();
        return redirect()->to('shifts');
    }

    public function saveShift()
    {
        $shift = new Shifts();
        $shift->SHIFT_NAME = \request('shift');
        $shift->SHIFT_START = \request('starttime');
        $shift->SHIFT_END = \request('endtime');
        $shift->NEXT_DAY_END = \request('nextday') == 'on' ? 1 : 0;
        $shift->START_GRACE_TIME = \request('start_grace');
        $shift->END_GRACE_TIME = \request('end_grace');
        $shift->save();
        return redirect()->to('shifts');
    }

    public function showAttendance()
    {
        $departments = Departments::all();
        $employees = Employees::all();
        return view("admin.attendance" , compact('departments' , 'employees'));
    }

    public function getAttendance()
    {
        $from = \request()->get('from');
        $to = \request()->get('to');
        $employee = \request()->get('employee');
        $department = \request()->get('department');
        $Date1 = $from;
        $Date2 = $to;
        $array = array();
        $Variable1 = strtotime($Date1);
        $Variable2 = strtotime($Date2);
        for ($currentDate = $Variable1; $currentDate <= $Variable2;
             $currentDate += (86400)) {
            $Store = date('Y-m-d', $currentDate);
            $array[] = $Store;
        }
        $arr = [];
        if ($department == 0 && $employee != 0 && $from != '' && $to != ''){
            $emp = Employees::with(['checkinout' => function($query) use ($from , $to){
                $query->whereBetween('CHECKTIME' , [date('Y-m-d' , strtotime($from)),date('Y-m-d' , strtotime($to))]);
            }])->where('ID' , $employee)->get();
            $arr['employees'] = $emp;
            $arr['dates'] = $array;
            echo json_encode($arr);
        }
        else if ($employee == 0 && $department != 0 && $from != '' && $to != ''){
            $emp = Employees::whereHas('departments' , function($query) use ($department){
                $query->where("ID" , $department);
            })->with(['checkinout' => function($query) use ($from , $to){
                $query->whereBetween('CHECKTIME' , [date('Y-m-d' , strtotime($from)),date('Y-m-d' , strtotime($to))]);
            }])->get();
            $arr['employees'] = $emp;
            $arr['dates'] = $array;
            echo json_encode($arr);
        }
        else
        {
            return -1;
        }
    }
}
