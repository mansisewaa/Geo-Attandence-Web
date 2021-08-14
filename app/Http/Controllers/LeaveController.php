<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaveController extends Controller
{
    public function leave()
    {
        $leave =  Leave::all();
        return view ('admin.employee.leave')
        ->with('leave',$leave)
        ;
    }
}
