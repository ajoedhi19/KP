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
        
        // $validatedData = $request->validate([
        //     'nama_mitra' => 'required|unique',
        //     'Jenis_KHS' => 'required',
        //     'Nomor_KHS' => 'required',
        //     'Tanggal_Berakhir_KHS' => 'required',
        //     'Nama_Penanggung_Jawab' => 'required',
        //     'email' => 'required|email|unique:users',
        //     'No_HP' => 'required',
        //     'Alamat_Penanggung_Jawab' => 'required',
        //     'No_Identitas' => 'required',
        //     'No_Identitas' => 'required|unique:users',
        //     'Foto_Identitas' => 'required',
        //     'Jumlah_Minimal_Naker' => 0,
        //     'password' => 'required',
        //     'password' => 0,
        // ]);

        // dd($validatedData);

        $foto=$request->file('Foto_Identitas')->store('Foto_Identitas');

        $credit=$request["password"]=bcrypt($request["password"]);

        // User::create($validatedData);
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
            "Foto_Identitas"=>$foto,
            "Jumlah_Minimal_Naker"=>$request["Jumlah_Minimal_Naker"]??0,
            "password"=>$credit,
            "Role"=>$request["Role"]??0
        ]);
        return redirect('/');
    }
}