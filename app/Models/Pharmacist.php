<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{

    protected $primaryKey = "pharmacist_id";
    private $user_id;
    private $pharmacy_name;
    private $pharmacy_address;

    public function Address()
    {
        return $this->hasOne(Address::class, 'address_id');
    }
}
