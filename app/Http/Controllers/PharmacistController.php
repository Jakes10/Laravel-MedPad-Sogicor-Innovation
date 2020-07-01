<?php

namespace App\Http\Controllers;

use App\Pharmacist;
use Illuminate\Http\Request;

class PharmacistController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            "password" => "min:6|required|confirmed",
            "first_name" => "required",
            "last_name" => "required",
            "dob" => "required",
            "gender" => "required",
            "nationality" => "required",
            "occupation" =>  "required",
            "email" => "required",
            "accountType" => "required", // Doctor Patient Pharmacist

        ]);

        $pharmacist = new Pharmacist();

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
     * @param  \App\Pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function show(Pharmacist $pharmacist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function edit(Pharmacist $pharmacist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pharmacist $pharmacist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pharmacist  $pharmacist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pharmacist $pharmacist)
    {
        //
    }
}
