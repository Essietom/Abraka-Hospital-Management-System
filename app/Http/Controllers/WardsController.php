<?php

namespace App\Http\Controllers;

use App\Ward;
use Illuminate\Http\Request;

class WardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $wards = Ward::all();
        return view('wards.index',['wards'=>$wards]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('wards.create');
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
         $ward=Ward::create([

                'ward_name'=>$request->input('ward'),
                'num_of_bed'=>$request->input('num_of_bed')

                
                ]);

        if($ward){
            return redirect()->route('wards.index')->with('success', "Ward sucessfully inserted");
        }
        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function show(Ward $ward)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function edit(Ward $ward)
    {
        //
         $ward = Ward::find($ward->id);
        return view('wards.edit',['ward'=>$ward]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ward $ward)
    {
        //
        $wardUpdate = Ward::where('id', $ward->id)
        ->update([
            'ward_name'=>$request->input('ward'),
            'num_of_bed'=>$request->input('num_of_bed')
            ]);

        if($wardUpdate){
            return redirect()->route('wards.index')->with('success', "Ward sucessfully updated");
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ward  $ward
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ward $ward)
    {
        //
         $findWard=Ward::find($ward->id);
        if($findWard->delete()){
            return redirect()->route('wards.index')
            ->with('success', 'ward successfully deleted');

        }

        return back()->withInput()->with('error' , 'ward cannot be deleted');
    }
}
