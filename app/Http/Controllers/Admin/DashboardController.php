<?php 

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller

{
    public function index()

    {
        $users = User::table('users')->count();
        return view('admin.employee.dashboard',compact('users'));
    }
   
    public function registered()
    {   
        /*$dd = User::count();
        return dd($dd);*/

        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
}
