<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttenController extends Controller
{
     public function show()
    {
       $record =  Attendance::all();
        return view ('admin.employee.Atten')
        ->with('record',$record)
        ;
    }

}