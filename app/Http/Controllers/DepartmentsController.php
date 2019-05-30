<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::all();
        return view('departments.index',['departments'=>$departments]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $department=Department::create([

                'dept_name'=>$request->input('department')

                
                ]);

        if($department){
            return redirect()->route('departments.index')->with('success', "Department sucessfully inserted");
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
        $department = Department::find($department->id);
        return view('departments.edit',['department'=>$department]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $departmentUpdate = Department::where('id', $department->id)
        ->update([
            'dept_name'=>$request->input('department')
            ]);

        if($departmentUpdate){
            return redirect()->route('departments.index')->with('success', "Department sucessfully updated");
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
         $findDepartment=Department::find($department->id);
        if($findDepartment->delete()){
            return redirect()->route('departments.index')
            ->with('success', 'department successfully deleted');

        }

        return back()->withInput()->with('error' , 'department cannot be deleted');

    }
}
