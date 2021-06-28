<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\Icubrequest;

class Icubed extends Model
{
    use HasFactory;

    protected $table = "icubeds";

    public $fillable = [
        'ward_no',
        'status',
        'hospital_id'
    ];

    public function hospitals()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function icubedrequest()
    {
        return $this->hasOne(Icubrequest::class);
    }
}
