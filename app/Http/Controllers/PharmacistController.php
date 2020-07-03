<?php

namespace App\Http\Controllers;

use App\Models\Pharmacist;
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
     * @param Request $request
     * @return void
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $address = new AddressController();
        $address->create($request);

        $this->validate($request, [
            "user_id" => "required",
            "pharmacy_name" => "required",
            "address_id" => "required",

        ]);

        $pharmacist = new Pharmacist();
        $pharmacist->user_id = $request->user_id;
        $pharmacist->pharmacy_name = $request->pharmacy_name;
        $pharmacist->pharmacy_address = $request->address_id;
        $pharmacist->save();

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
