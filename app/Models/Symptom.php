<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $primaryKey="symptom_id";
    private $name;
    private $consultation_id;

    public function Consultation()
    {
        return $this->hasOne(Consultation::class, 'consultation_id');
    }

}
