<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    protected $primaryKey = "patient_id";
    private $user_id;
    private $emergency_contact;
    private $address;



    public function Consultation()
    {
        return $this->hasMany(Consultation::class, 'patient_id');
    }

    public function Address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }

//    public function PharmacyVisit()
//    {
//        return $this->hasMany(PharmacyVisit::class, 'visit_id');
//    }
//
//    public function Symptom()
//    {
//        return $this->hasMany(Symptom::class, 'visit_id');
//    }
}
