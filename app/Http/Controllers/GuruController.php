<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher_application;

class GuruController extends Controller
{
    public function store(Request $request){
        
       
        $validated_data = $request->validate([

                "nama_sekolah" => "required",
                "nama_pengetua" => "required",
                "email_sekolah" => "required|email",
                "nombor_telefon" => "required",
                "nombor_faks" => "required",
                "nama_guru" => "required",
                "nombor_tel_guru" => "required",
                "subjek_diajar"=> "required",
                "jantina" => "required",
                "gred_guru" => "required",
                "username" => "required|alpha_num|min:5|max:30",
                "password" => "required|min:8",
                "setuju" => "required",
        ]);
        // dd($request);
        // echo "<h1>SEMUA OKEY</h1>";
        unset($validated_data['setuju']);

        $save_data = Teacher_application::create($validated_data);
        // dd($save_data);
        return redirect('borang')->with(
            'success', 
            "Rekod $validated_data[nama_guru] telah disimpan pada {$save_data->created_at->toDayDateTimeString()}");
    }
}
