<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Icubrequest;
use App\Models\Ambulancerequest;
use App\Models\Pcrtest;
use App\Models\Login;
use App\Models\Hospital;
use Input;


class Patient extends Model
{
    use HasFactory;

    protected $table = "patients";

    public $fillable = [
        'pat_name',
        'pat_email',
        'pat_address',
        'pat_id',
        'pat_mobile',
        'login_id',
        'hospital_id'
    ];

    public function loginp()
    {
        return $this->belongsTo(Login::class);
    }

    public function icubedsrequests()
    {
        return $this->hasMany(Icubrequest::class);
    }

    public function ambulancesrequests()
    {
        return $this->hasMany(Ambulancerequest::class);
    }

    public function pcrtests()
    {
        return $this->hasMany(Pcrtest::class);
    }

    public function hospitalsicu()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function hospitalsamb()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function hospitalspcr()
    {
        return $this->belongsTo(Hospital::class);
    }
}
