<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PharmacyVisit extends Model
{
    protected $primaryKey = "visitation_id";
    private $consultation_id;
    private $pharmacist_id;

    public function Consultation()
    {
        return $this->hasOne(Vital::class, 'consultation_id');
    }
}
