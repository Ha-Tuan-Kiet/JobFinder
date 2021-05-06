<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
   
    public function careers(){
        return $this->belongsToMany(Career::class);
    }
    public function province(){
        return $this->hasOne(Province::class,'id','province_id');
    }
   
    public function user(){
        return $this->hasOne(User::class,'id','created_by');
    }
    public function usercompany(){
        return $this->hasOne(UserCompany::class,'id','company_id');
    }
}
