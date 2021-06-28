<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Ambulance;

class Ambulancerequest extends Model
{
    use HasFactory;

    protected $table = "ambulancerequests";

    public $fillable = [
        'reason',
        'action',
        'patient_id',
        'ambulance_id'
    ];

    public function patientsam()
    {
        return $this->belongsTo(Patient::class);
    }

    public function ambulance()
    {
        return $this->belongsTo(Ambulance::class);
    }
}
