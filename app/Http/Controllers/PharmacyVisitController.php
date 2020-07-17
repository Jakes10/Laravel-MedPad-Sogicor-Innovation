<?php

namespace App\Http\Controllers;


use App\Models\PharmacyVisit;
use Illuminate\Http\Request;

class PharmacyVisitController extends Controller
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
            "consultation_id" => "required",
            "pharmacist_id" => "required",
            "year" => "required",
            "month" => "required",
            "day" => "required"

        ]);

        $visit = new PharmacyVisit();
        $visit->consultation_id = $request->consultation_id;
        $visit->pharmacist_id = $request->pharmacist_id;
        $visit->save();
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
     * @param  \App\PharmacyVisit  $pharmacyVisit
     * @return \Illuminate\Http\Response
     */
    public function show(PharmacyVisit $pharmacyVisit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PharmacyVisit  $pharmacyVisit
     * @return \Illuminate\Http\Response
     */
    public function edit(PharmacyVisit $pharmacyVisit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PharmacyVisit  $pharmacyVisit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PharmacyVisit $pharmacyVisit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PharmacyVisit  $pharmacyVisit
     * @return \Illuminate\Http\Response
     */
    public function destroy(PharmacyVisit $pharmacyVisit)
    {
        //
    }
}
