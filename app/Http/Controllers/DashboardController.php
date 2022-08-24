<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Naker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard/mitra');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin/home');
    }

    public function procurementHome()
    {
        // return view('procurement/home');
        $data = User::select()->where('Role', 0)->get();
        return view('procurement/home', compact('data'));
        // $data['mitra'] = User::select('nama_mitra')->where('Role', 0)->get();
        // return view('procurement/home')->with('mitra', $data['mitra']);
    }

    public function procurementMitra()
    {
        // return view('procurement/home');
        $data = User::select()->where('Role', 8)->get();
        return view('procurement/mitra', compact('data'));
        // $data['mitra'] = User::select('nama_mitra')->where('Role', 0)->get();
        // return view('procurement/home')->with('mitra', $data['mitra']);
    }

    public function procurementEdit($id)
    {
        $data = User::findorfail($id);
        return view('procurement/edit', compact('data'));
    }
    public function procurementStore(Request $request, $id)
    {
        $data = User::findorfail($id);
        $data->update($request->all());
        return redirect()->route('procurement.home');
    }

    public function mitraHome()
    {
        return view('mitra/home');
    }

    public function mitraTambah()
    {
        return view('mitra/tambah');
    }

    public function mitraStore(Request $request)
    {
        // dd($request);
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
            "witel"=>$request["witel"],
            "status_naker"=>$request["status_naker"],
            "direktorat"=>$request["direktorat"],
            "Level_Pendidikan"=>$request["Level_Pendidikan"],
            "Posisi"=>$request["Posisi"],
            "user_id"=> Auth::user()->id,
            "Tanggal_Pengajuan"=>$request["Tanggal_Pengajuan"],
            "NIK_Waspag_TA"=>$request["NIK_Waspag_TA"],
            "Regional"=>$request["Regional"],
            "Status_Kepegawaian"=>$request["Status_Kepegawaian"],
            "Tanggal_Mulai_Kontrak"=>$request["Tanggal_Mulai_Kontrak"],
            "Tanggal_Akhir_Kontrak"=>$request["Tanggal_Akhir_Kontrak"],
            "Kontrak_Kerja"=>$request["Kontrak_Kerja"]
        ]);
        return redirect('/mitra/home');
    }

    
}