<?php

namespace App\Http\Controllers;

use App\Consultation;
use Illuminate\Http\Request;

class ConsultationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $consultations = Consultation::all();
        return view('consultations.index',['consultations'=>$consultations]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('consultations.create');
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
        $consultation=Consultation::create([

                'appointment_time'=>$request->input('appointment_time'),
                'appointment_date'=>$request->input('appointment_date'),
                'description'=>$request->input('description'),
                'doctor_id'=>$request->input('doctor_id'),
                'patient_id'=>$request->input('patient_id')

                
                ]);

        if($consultation){
            return redirect()->route('consultations.index')->with('success', "Consultation sucessfully inserted");
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
        $consultation = Consultation::find($consultation->id);
        return view('consultations.edit',['consultation'=>$consultation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
        $findConsultation=Consultation::find($consultation->id);
        if($findConsultation->delete()){
            return redirect()->route('consultations.index')
            ->with('success', 'Consultation successfully deleted');

        }

        return back()->withInput()->with('error' , 'Consultation cannot be deleted');

    }
}
