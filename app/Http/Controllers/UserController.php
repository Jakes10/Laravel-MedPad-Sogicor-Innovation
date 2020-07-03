<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

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
            "mobile" =>  "required",
            "email" => "required",
            "accountType" => "required", // Doctor Patient Pharmacist

        ]);
        $user = new User();
        $user->first_name=$request->first_name;
        $user->middle_name=$request->middle_name;
        $user->last_name=$request->last_name;
        $user->dob=$request->dob;
        $user->gender=$request->gender;
        $user->nationality=$request->nationality;
        $user->occupation= $request->occupation;
        $user->mobile= $request->mobile;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();


        $request->request->add([ 'user_id' => $user->user_id]);


        if ($request->accountType == "Pharmacist") {
            $pharmacist = new PharmacistController();
            $pharmacist->create($request);
        }
        if ($request->accountType == "Doctor") {

            $doctor = new DoctorController();
            $doctor->create($request);

        }
        if ($request->accountType == "Patient") {
            $patient = new PatientController();
            $patient->create($request);
        }

        if ($user->save()) {
            return response()->json(['message' => 'Account Created Successfully '], 200);
        } else {
            return response()->json(['message' => 'Error Creating Account'], 500);
        }
    }

    public function show($user_id){
        $account = User::where('user_id', $user_id)->with(["Patient", "Doctor", "Pharmacist"])->get();
        return  response()->json($account, 200);
    }
}
