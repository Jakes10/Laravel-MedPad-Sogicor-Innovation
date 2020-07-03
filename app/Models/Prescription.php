<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $primaryKey ="prescription_id";
    private $consultation_id;
    private $medicine_code;
}
