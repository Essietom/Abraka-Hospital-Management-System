<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients = Patient::all();
        return view('patients.index',['patients'=>$patients]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
     
        return view('patients.create');
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

        
            $patient=Patient::create([

                'firstname'=>$request->input('firstname'),
                'lastname'=>$request->input('lastname'),
                'phone_num'=>$request->input('phone'),
                'sex'=>$request->input('sex'),
                'dob'=>$request->input('dob'),
                'age'=>$request->input('age'),
                'bloodgroup'=>$request->input('bloodgroup'),
                'marital_status'=>$request->input('marital_status'),
                'address'=>$request->input('address'),
                'email'=>$request->input('email')

                
                ]);

        if($patient){
            return redirect()->route('patients.index')->with('success', "Patient sucessfully inserted");
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        $patients = Patient::all();
        // $patient = Patient::where('id', $patient->id)->first();
        return view('patients.show',['patients'=>$patients]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        $patient = Patient::find($patient->id);
        return view('patients.edit',['patient'=>$patient]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $patientUpdate = Patient::where('id', $patient->id)
        ->update([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'phone_num'=>$request->input('phone'),
            'sex'=>$request->input('sex')
            ]);

        if($patientUpdate){
            return redirect()->route('patients.index')->with('success', "Patient sucessfully updated");
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //

        $findPatient=Patient::find($patient->id);
        if($findPatient->delete()){
            return redirect()->route('patients.index')
            ->with('success', 'Patient successfully deleted');

        }

        return back()->withInput()->with('error' , 'patient cannot be deleted');


    }
}
