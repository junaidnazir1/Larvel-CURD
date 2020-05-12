<?php

namespace App\Http\Controllers;

use App\Employees;
use Illuminate\Http\Request;
use Log;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=Employees::all();
        return view('employees.index',compact('employees'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $employee= new Employees();
         $employee->username=$request['username'];
         $employee->email=$request['email'];
         $employee->contact=$request['contact'];
         $employee->password=$request['password'];
         $employee->save();
         return redirect('employees');
         
      
    }
  
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $employee= Employees::find($id);
        return view('employees.show', compact('employee', $employee));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employees::find($id);
        
        return view('employees.edit',compact('employee',$employee));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
      
        $employee=Employees::find($id);
        // $employee->update($request->all());

        $employee->username=$request['username'];
        $employee->email=$request['email'];
        $employee->contact=$request['contact'];
        $employee->password=$request['password'];
        $employee->update();
        return redirect('employees');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employees  $employees
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee=Employees::find($id);
        $employee->destroy($id);
        return redirect('employees');
    }
}
