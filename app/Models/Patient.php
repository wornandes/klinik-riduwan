<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MedicalRecord;

class Patient extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function Record(): HasMany
    {
        return $this->hasMany(MedicalRecord::class);
    }

}
