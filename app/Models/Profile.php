<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Profile extends Model
{
    use HasFactory;
    // use Notifiable;

    protected $fillable = [
        'phone','first_name','last_name','full_name','day_of_birth','gender','address','avatar'
    ];
}
