<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    private $patient_id;
    private $user_id;



    public function Consultation()
    {
        return $this->hasMany(Consultation::class, 'user_id');
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
