<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Vital extends Model
{
    private $vital_id;
    private $consultation_id;
    private $blood_pressure;
    private $body_temperature;
    private $heart_rate;
    private $respiration_rate;
    private $weight;
    private $height;
    private $blood_type;

    public function Consultation()
    {
        return $this->hasMany(Vital::class, 'consultation_id');
    }
}
