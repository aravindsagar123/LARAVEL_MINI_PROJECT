<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor_table extends Model
{
    use HasFactory;
     protected $fillable=[
        'doctor_name',
        'specialization',
        'phone_no',
        'email_id',
        'image',
     ];  
     protected $primaryKey='doctor_id';
}
