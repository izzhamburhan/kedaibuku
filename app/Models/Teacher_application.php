<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher_application extends Model
{
    use HasFactory;


    protected $fillable = [
                "nama_sekolah",
                "nama_pengetua" ,
                "email_sekolah" ,
                "nombor_telefon",
                "nombor_faks",
                "nama_guru" ,
                "nombor_tel_guru",
                "subjek_diajar",
                "jantina" ,
                "gred_guru" ,
                "username" ,
                "password" ,
                "setuju"
    ];
}
