<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Icubed;
use App\Models\Ambulance;
use App\Models\Pcrtest;
use App\Models\Login;
use App\Models\Patient;

class Hospital extends Model
{
    use HasFactory;

    protected $table = "hospitals";

    public $fillable = [
        'hos_name',
        'hos_email',
        'hos_address',
        'hos_mobile',
        'login_id'

    ];

    public function loginh()
    {
        return $this->belongsTo(Login::class);
    }

    public function icubeds()
    {
        return $this->hasMany(Icubed::class);
    }

    public function ambulances()
    {
        return $this->hasMany(Ambulance::class);
    }

    public function pcrtests()
    {
        return $this->hasMany(Pcrtest::class);
    }

    public function patientshos()
    {
        return $this->hasMany(Patient::class);
    }
}
