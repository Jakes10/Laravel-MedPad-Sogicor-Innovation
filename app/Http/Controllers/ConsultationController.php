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
            "consultation_type" => "required",
            "doctor_signature" => "required",
//          "doctor_remark" =>  "required",


        ]);

        $consultation = new Consultation();
        $consultation->patient_id= $request->patient_id;
        $consultation->doctor_id= $request->doctor_id;
        $consultation->doctor_remark= $request->doctor_remark;
        $consultation->consultation_type= $request->consultation_type;
        $consultation->doctor_signature= $request->doctor_signature;
        $consultation->save();

        $request->request->add(['consultation_id' => $consultation->consultation_id]);

        $vitals = new VitalController();
        $vitals->create($request);


        if($request->medicine_code!=null){
            $prescription = new PrescriptionController();
            $prescription->create($request);
        }

        if($request->symptom_name!=null){
            $symptoms = new SymptomController();
            $symptoms->create($request);
        }


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
     * @param $consultation_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($patient_id)
    {

        $consultationInfo =Consultation::where('patient_id', $patient_id)->get();//->with(["Symptom", "Vital", "Prescription"])
        return  response()->json($consultationInfo, 200);

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

    public function showSingleConsultation($consultation_id)
    {

        $consultationInfo =Consultation::where('consultation_id', $consultation_id)->with(["Symptom", "Vital", "Prescription"])->get();
        return  response()->json($consultationInfo, 200);

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
