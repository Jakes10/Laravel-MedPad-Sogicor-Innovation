<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $primaryKey = "address_id";

    private $user_id;
    private $id;
    private $country;
    private $parish;
    private $address_1;
    private $address_2;

    public function Patient(){
        return $this->hasOne(Patient::class, 'address');

    }
    public function Doctor(){
        return $this->hasOne(Doctor::class, 'office_location');

    }

    public function Pharmacist(){
        return $this->hasOne(Pharmacist::class, 'address_id');

    }
}
