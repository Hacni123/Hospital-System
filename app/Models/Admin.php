<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Login;

class Admin extends Model
{
    use HasFactory;

    protected $table = "adminall";

    public $fillable = [
        'admin_name',
        'admin_mobile',
        'admin_email',
        'admin_address',
        'login_id'
        

    ];


    public function login()
    {
        return $this->belongsTo(Login::class);
    }
}
