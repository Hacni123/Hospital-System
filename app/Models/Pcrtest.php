<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Pcrresult;

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

    public function pcrresult()
    {
        return $this->hasOne(Pcrresult::class);
    }
}
