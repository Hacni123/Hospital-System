<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Pcrtest;

class Pcrresult extends Model
{
    use HasFactory;

    protected $table = "pcrresults";

    public $fillable = [
        'date',
        'time',
        'patient_id',
        'pcrtest_id'
    ];

    public function patientspcr()
    {
        return $this->belongsTo(Patient::class);
    }

    public function pcrtest()
    {
        return $this->belongsTo(Pcrtest::class);
    }
}
