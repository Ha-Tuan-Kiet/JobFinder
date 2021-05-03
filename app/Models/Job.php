<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
   
    public function careers(){
        return $this->belongsToMany(Career::Class);
    }
    public function province(){
        return $this->hasOne(Province::Class,'id','province_id');
    }
   
    public function user(){
        return $this->hasOne(User::Class,'id','created_by');
    }
    public function usercompany(){
        return $this->hasOne(UserCompany::Class,'id','company_id');
    }
}
