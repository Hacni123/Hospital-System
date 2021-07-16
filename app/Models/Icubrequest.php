<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Icubed;

class Icubrequest extends Model
{
    use HasFactory;

    protected $table = "icubrequests";

    public $fillable = [
        'reason',
        'action',
        'patient_id',
        'icubed_id'
    ];

    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }

    public function icubed()
    {
        return $this->belongsTo(Icubed::class);
    }
}
