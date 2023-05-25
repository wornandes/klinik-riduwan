<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class Registration extends Model
{
    use HasFactory;
    public $timestamps = false;

    function patient(){
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
