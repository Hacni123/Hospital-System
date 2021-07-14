<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\Patient;

class Pcrtest extends Model
{
    use HasFactory;

    protected $table = "pcrtests";

    public $fillable = [
        'result',
        'date',
        'time',
        'status_hos',
        'status_pat',
        'hospital_id',
        'patient_id'
    ];

    public function hospitalsPcr()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function patientspcr()
    {
        return $this->belongsTo(Patient::class);
    }

}
