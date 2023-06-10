<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient_table extends Model
{
    use HasFactory;
    protected $fillable=[
        'doctor_id',
        'patient_name',
        'date',
        'image',
        'gender',
    ];
    protected $primaryKey='id';
}
