<?php

namespace App\Models;

use App\Vital;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $primaryKey = "consultation_id";
    private $patient_id;
    private $doctor_id;
    private $year;
    private $month;
    private $day;
    private $doctor_remark;

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
