<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $primaryKey = "doctor_id";

    private $office_location;
    private $user_id;

    public function Address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }

    public function Consultation()
    {
        return $this->hasMany(Consultation::class, 'doctor_id');
    }

    public  function User(){
        return $this->hasOne(User::class, 'user_id');

    }

}
