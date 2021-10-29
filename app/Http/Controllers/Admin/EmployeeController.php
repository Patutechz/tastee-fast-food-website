<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeFormRequest;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::latest()->SimplePaginate(10);
        //$employees = employee::all();
        //return $employees;
        return view('admin.employees.index' , compact('employees'));
        //return view('admin.employees.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeFormRequest $request)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images',$filename,'public');
            Employee::create([
                'avatar' => $filename,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,  
                'position' => $request->position, 
                'salary' => $request->salary,           
                ]);
        }else{
            Employee::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,  
                'position' => $request->position, 
                'salary' => $request->salary,                 
                ]);
        }
        return redirect()->route('admin.employees.create')->with('message','employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('admin.employees.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmployeeFormRequest $request, Employee $employee)
    {
        if($request->hasFile('avatar')){
            $filename = $request->avatar->getClientOriginalName();
            $request->avatar->storeAs('images',$filename,'public');
            $employee->update([
                'avatar' => $filename,
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,  
                'position' => $request->position, 
                'salary' => $request->salary,                  
                ]);
        }else{
            $employee->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'address' => $request->address, 
                'contact' => $request->contact, 
                'email' => $request->email,  
                'position' => $request->position, 
                'salary' => $request->salary,                 
                ]);
        }
        return redirect()->route('admin.employees.index')->with('message','employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('admin.employees.index')->with('message','employee deleted successfully');
    }
}
