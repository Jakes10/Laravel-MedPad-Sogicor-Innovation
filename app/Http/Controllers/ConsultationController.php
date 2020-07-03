<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
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
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function create(Request $request)
    {
        $this->validate($request, [

            "patient_id" => "required",
            "doctor_id" => "required",
            "year" => "required",
            "month" => "required",
            "day" => "required",
//            "doctor_remark" =>  "required",


        ]);

        $consultation = new Consultation();
        $consultation->patient_id= $request->patient_id;
        $consultation->doctor_id= $request->doctor_id;
        $consultation->year= $request->year;
        $consultation->month= $request->month;
        $consultation->day= $request->day;
        $consultation->doctor_remark= $request->doctor_remark;
        $consultation->save();

        $request->request->add(['consultation_id' => $consultation->consultation_id]);

        $vitals = new VitalController();
        $vitals->create($request);


//        if($request->symptom!=null){
        //        $symptoms = new SymptomController();
        //        $symptoms->create($request);
//        }


        if ($consultation->save()) {
            return response()->json(['message' => 'Consultation created successfully'], 200);
        } else {
            return response()->json(['message' => 'Error adding consultation'], 500);
        }
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
    }
}
