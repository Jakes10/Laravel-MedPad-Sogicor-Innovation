<?php

namespace App\Http\Controllers;

use  App\Models\Disability;
use Illuminate\Http\Request;

class DisabilityController extends Controller
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
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $this->validate($request, [

            "patient_id"	=> "required",
            "disability_type"	=> "required",

        ]);

        $disability = new Disability();
        $disability->patient_id=$request->patient_id;
        $disability->type=$request->disability_type;
        $disability->save();

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
     * @param  \App\Disability  $disability
     * @return \Illuminate\Http\Response
     */
    public function show(Disability $disability)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disability  $disability
     * @return \Illuminate\Http\Response
     */
    public function edit(Disability $disability)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disability  $disability
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disability $disability)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disability  $disability
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disability $disability)
    {
        //
    }
}
