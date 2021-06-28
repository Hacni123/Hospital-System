<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\Ambulancerequest;

class Ambulance extends Model
{
    use HasFactory;

    protected $table = "ambulances";

    public $fillable = [
        'status',
        'hospital_id'
    ];

    public function hospitalsAm()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function ambulancerequest()
    {
        return $this->hasOne(Ambulancerequest::class);
    }
}
