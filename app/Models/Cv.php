<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = [
//        'phone', 'email', 'gender','position_apply','education'
    ];
    public function profile(){
        return $this->hasOne(Profile::class,'id','profile_id');
    }
}
