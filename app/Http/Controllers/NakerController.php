<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Naker;

class NakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Naker::all();
        // dd($data);
        // return view('dashboard.Admin.dashboard', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Mitra.formnaker');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = Naker::create([
            "Nama"=>$request["Nama"],
            "Tanggal_Lahir"=>$request["Tanggal_Lahir"],
            "Tempat_Lahir"=>$request["Tempat_Lahir"],
            "Jenis_Kelamin"=>$request["Jenis_Kelamin"],
            "Alamat"=>$request["Alamat"],
            "No_KTP"=>$request["No_KTP"],
            "Foto_KTP"=>$request["Foto_KTP"],
            "No_KK"=>$request["No_KK"],
            "No_Kartu_BPJS"=>$request["No_Kartu_BPJS"],
            "No_NPWP"=>$request["No_NPWP"],
            "No_HP"=>$request["No_HP"],
            "No_Telpon_Keluarga"=>$request["No_Telpon_Keluarga"],
            "Nama_Keluarga"=>$request["Nama_Keluarga"],
            "Email"=>$request["Email"],
            "id_witel"=>$request["id_witel"],
            "status_naker"=>$request["status_naker"],
            "id_direktorat"=>$request["id_direktorat"],
            "Level_Pendidikan"=>$request["Level_Pendidikan"],
            "Posisi"=>$request["Posisi"],

            "id_mitra"=>$request["id_mitra"]??0,
            
            "Tanggal_Pengajuan"=>$request["Tanggal_Pengajuan"],
            "NIK_Waspag_TA"=>$request["NIK_Waspag_TA"],
            "Regional"=>$request["Regional"],
            "Status_Kepegawaian"=>$request["Status_Kepegawaian"],
            "Tanggal_Mulai_Kontrak"=>$request["Tanggal_Mulai_Kontrak"],
            "Tanggal_Akhir_Kontrak"=>$request["Tanggal_Akhir_Kontrak"],
            "Kontrak_Kerja"=>$request["Kontrak_Kerja"]
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
