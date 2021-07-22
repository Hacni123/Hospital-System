<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
class SendCode extends Model
{
    public static function sendCode($pat_mobile){
        $code=rand(1111,9999);
        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+94'.(int) $pat_mobile,
            'from'=> 'Bawanie',
            'text'=>'Verify code: '.$code,
        ]);
        return $code;
    }

}

?>