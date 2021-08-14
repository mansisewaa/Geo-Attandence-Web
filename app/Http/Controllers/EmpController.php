<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
/* public function index()
    {
        $employees = Employee::all();
        return view('employee.create',compact('create',$employees));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees = Employee::all();
        return view ('admin.employee.EDetails')
            ->with('employees',$employees)   
            ; 
    }

    public function new()
    {
        return view ('admin.employee.newemp');
     }

    


   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Respo nse
     */
    public function store(Request $request)
    {
        
       /* $validatedData = $request->Validate ([
            'fname' => ['required'],
            'lname' => ['required'],
            'birth' => ['required'],
            'Email' => ['required', 'string', 'email'],
            'number' => ['required', 'min:10'],
            'Address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip' => ['required'],
            'started_at' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);*/


      $employees = new Employee;
            
        $employees->id = $request->id;
        $employees->fname = $request->fname;
        $employees->lname = $request->lname;
        $employees->birth = $request->birth;
        $employees->Email = $request->Email;
        $employees->number = $request->number;
        $employees->Address = $request->Address;
        $employees->city = $request->city;
        $employees->state = $request->state;
        $employees->zip = $request->zip;
        $employees->started_at = $request->started_at;
        $employees->password = $request->password;
       
        $employees->save();
     
        return redirect('/create')
            ->with('status','New Employee Added')
        ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
       $emps = Employee::find($id);
       return view('admin.employee.edit', compact('emps'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        
        $employees = Employee::findOrFail($id);
        
        $employees->fname = $request->fname;
        $employees->lname = $request->lname;
        $employees->birth = $request->birth;
        $employees->Email = $request->Email;
        $employees->number = $request->number;
        $employees->Address = $request->Address;
        $employees->city = $request->city;
        $employees->state = $request->state;
        $employees->zip = $request->zip;
        $employees->started_at = $request->started_at;
        $employees->password = $request->password;
       
        $employees->update();
        return redirect('/create')->with('status','Details Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
