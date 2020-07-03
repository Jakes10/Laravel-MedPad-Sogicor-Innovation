<?php

namespace App\Http\Controllers;

use App\Models\Vital;
use Illuminate\Http\Request;

class VitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     * @return void
     */
    public function create(Request $request)
    {
        $vital = new Vital();
        $vital->vital_id=$request->vital_id;
        $vital->consultation_id=$request->consultation_id;
        $vital->blood_pressure=$request->blood_pressure;
        $vital->body_temperature=$request->body_temperature;
        $vital->heart_rate=$request->heart_rate;
        $vital->respiration_rate=$request->respiration_rate;
        $vital->weight=$request->weight;
        $vital->height=$request->height;
        $vital->blood_type=$request->blood_type;
        $vital->save();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function show(Vital $vital)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function edit(Vital $vital)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vital $vital)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vital  $vital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vital $vital)
    {
        //
    }
}
