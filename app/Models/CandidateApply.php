<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateApply extends Model
{
    protected $fillable = ['cv_id'];
    use HasFactory;
}
