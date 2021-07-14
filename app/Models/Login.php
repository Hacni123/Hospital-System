<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\Admin;

class Login extends Model
{
    use HasFactory;

    protected $table = "login";

    public $fillable = [
        'login_username',
        'login_password'

    ];

    public function patient()
    {
        return $this->hasOne(Patient::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}
