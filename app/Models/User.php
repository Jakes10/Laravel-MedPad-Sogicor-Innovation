<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
//    private $user_id;
    protected $primaryKey = "user_id";
    private $first_name;
    private $middle_name;
    private $last_name;
    private $dob;
    private $gender;
    private $nationality;
    private $occupation;
    private $email;
    private $mobile;
    private $password;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function Patient()
    {
        return $this->hasOne(Patient::class, 'user_id');
    }

    public function Doctor()
    {
        return $this->hasOne(Doctor::class, 'user_id');
    }

    public function Pharmacist()
    {
        return $this->hasOne(Pharmacist::class, 'user_id');
    }


}
