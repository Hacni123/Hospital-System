<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hospital;
use App\Models\Pcrresult;

class Pcrtest extends Model
{
    use HasFactory;

    protected $table = "pcrtests";

    public $fillable = [
        'pat_id',
        'result',
        'hospital_id'
    ];

    public function hospitalsPcr()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function pcrresult()
    {
        return $this->hasOne(Pcrresult::class);
    }
}
