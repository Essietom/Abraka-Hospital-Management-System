<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = Staff::all();
        return view('staffs.index',['staffs'=>$staffs]);     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('staffs.create');
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
        $staff=Staff::create([

                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
                'phone_num'=>$request->input('phone'),
                'sex'=>$request->input('sex'),
                'dob'=>$request->input('dob'),
                'age'=>$request->input('age'),
                'bloodgroup'=>$request->input('bloodgroup'),
                'marital_status'=>$request->input('marital_status'),
                'department_id'=>$request->input('department'),
                'address'=>$request->input('address'),
                'email'=>$request->input('email'),
                'staff_no'=>$request->input('staffno'),
                'designation'=>$request->input('designation'),


                
                ]);

        if($staff){
            return redirect()->route('staffs.index')->with('success', "Staff sucessfully inserted");
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
        $staff = Staff::find($staff->id);
        return view('staffs.edit',['staff'=>$staff]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        //
        $staffUpdate = Staff::where('id', $staff->id)
        ->update([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'phone_num'=>$request->input('phone'),
            'sex'=>$request->input('sex'),
            'bloodgroup'=>$request->input('bloodgroup'),
            'department_id'=>$request->input('department'),
            'address'=>$request->input('address'),
            'designation'=>$request->input('designation'),
            'dob'=>$request->input('dob'),
            'email'=>$request->input('email'),
            'staff_no'=>$request->input('staffno'),
            'marital_status'=>$request->input('marital_status'),
            ]);

        if($staffUpdate){
            return redirect()->route('staffs.index')->with('success', "Staff sucessfully updated");
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
        $findStaff=Staff::find($staff->id);
        if($findStaff->delete()){
            return redirect()->route('staffs.index')
            ->with('success', 'Staff successfully deleted');

        }

        return back()->withInput()->with('error' , 'staff cannot be deleted');
    }
}
