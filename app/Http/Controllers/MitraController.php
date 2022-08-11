<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mitra::all();
        // dd($data);
        return view('dashboard.Admin.dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Mitra::create([
            "Nama_Mitra"=>$request["Nama_Mitra"],
            "Jenis_KHS"=>$request["Jenis_KHS"],
            "Nomor_KHS"=>$request["Nomor_KHS"],
            "Tanggal_Berakhir_KHS"=>$request["Tanggal_Berakhir_KHS"],
            "Nama_Penanggung_Jawab"=>$request["Nama_Penanggung_Jawab"],
            "Email_Penanggung_Jawab"=>$request["Email_Penanggung_Jawab"],
            "No_HP"=>$request["No_HP"],
            "Alamat_Penanggung_Jawab"=>$request["Alamat_Penanggung_Jawab"],
            "No_Identitas"=>$request["No_Identitas"],
            "Foto_Identitas"=>$request["Foto_Identitas"],
            "Jumlah_Minimal_Naker"=>$request["Jumlah_Minimal_Naker"]??0,
            "Password"=>$request["Password"]
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}