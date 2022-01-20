<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function store(Request $request){
        
       
        $validated_data = $request->validate([

                "nama_sekolah" => ["required"],
                "nama_pengetua" => ["required"],
                "email_sekolah" => ["required"],
                "nombor_telefon" => ["required"],
                "nombor_faks" => ["required"],
                "nama_guru" => ["required"],
                "nombor_tel_guru" => ["required"],
                "subjek_diajar"=> ["required"],
                "jantina" => ["required"],
                "gred_guru" => ["required"],
                "username" => ["required"],
                "password" => ["required"],
                "setuju" => ['required'],
        ]);
        dd($request);
        echo "<h1>SEMUA OKEY</h1>";
    }
}
