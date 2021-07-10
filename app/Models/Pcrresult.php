<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pcrtest;

class Pcrresult extends Model
{
    use HasFactory;

    protected $table = "pcrresults";

    public $fillable = [
        'date',
        'time',
        'status_hos',
        'status_pat',
        'pcrtest_id'
    ];


    public function pcrtest()
    {
        return $this->belongsTo(Pcrtest::class);
    }
}
