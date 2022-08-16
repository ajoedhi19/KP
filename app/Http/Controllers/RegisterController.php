<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("register");
    }
    
    public function store(Request $request)
    {
        $credit=$request["password"]=bcrypt($request["password"]);
        $data = User::create([
            "nama_mitra"=>$request["nama_mitra"],
            "Jenis_KHS"=>$request["Jenis_KHS"],
            "Nomor_KHS"=>$request["Nomor_KHS"],
            "Tanggal_Berakhir_KHS"=>$request["Tanggal_Berakhir_KHS"],
            "Nama_Penanggung_Jawab"=>$request["Nama_Penanggung_Jawab"],
            "email"=>$request["email"],
            "No_HP"=>$request["No_HP"],
            "Alamat_Penanggung_Jawab"=>$request["Alamat_Penanggung_Jawab"],
            "No_Identitas"=>$request["No_Identitas"],
            "Foto_Identitas"=>$request["Foto_Identitas"],
            "Jumlah_Minimal_Naker"=>$request["Jumlah_Minimal_Naker"]??0,
            "password"=>$credit,
            "Role"=>$request["Role"]??0
        ]);
        return redirect('/');
    }
}