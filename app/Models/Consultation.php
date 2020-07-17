<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $primaryKey = "consultation_id";
    private $patient_id;
    private $doctor_id;
    private $doctor_remark;
    private $doctor_signature;
    private $consultation_type;

//
    public function Vital()
    {
        return $this->hasOne(Vital::class, 'consultation_id');
    }

    public function Prescription()
    {
        return $this->hasOne(Prescription::class, 'consultation_id');
    }


    public function PharmacyVisit()
    {
        return $this->hasMany(PharmacyVisit::class, 'consultation_id');
    }
    public function Symptom()
    {
        return $this->hasMany(Symptom::class, 'consultation_id');
    }
}
