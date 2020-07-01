<?php

namespace App\Models;

use App\Vital;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    private $consultation_id;
    private $patient_id;
    private $doctor_id;
    private $year;
    private $month;
    private $day;
    private $doctor_remark;

    public function Patient()
    {
        return $this->hasOne(Patient::class, 'user_id');
    }
    public function Vital()
    {
        return $this->hasOne(Vital::class, 'consultation_id');
    }

    public function Symptom()
    {
        return $this->hasMany(Symptom::class, 'consultation_id');
    }
}
