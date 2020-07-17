<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Disability extends Model
{
    protected $primaryKey = "disability_id";
    private $patient_id;
    private $type;

    public function Patient(){
        return $this->hasMany(Patient::class, 'disability_id');
    }

}
