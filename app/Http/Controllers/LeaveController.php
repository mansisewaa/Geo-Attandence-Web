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

    public function status(Request $request, $id)
    {
        $stat = leave::findorFail($id);
        return view('admin.employee.updateleave', compact('stat')); 
    }
    public function statusupdate(Request $request, $id)
    {
        //dd($request->all());
       
        $stat = Leave::find($id);
        $stat->name = $request->input('name');
        $stat->status = $request->input('status');
        $stat->update();

        return redirect('/leave')->with('status','Status Updated');
    }
}

