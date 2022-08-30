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
        $data = User::select()->where('Role','>' ,1)->where('Role','<',8)->get();
        return view('admin/home', compact('data'));
    }

    public function adminTambah()
    {
        return view('admin/tambah');
    }
    public function adminCreate(Request $request)
    {
        $credit=$request["password"]=bcrypt($request["password"]);

        // User::create($validatedData);
        $data = User::create([
            "nama_mitra"=>$request["nama_mitra"],
            "Jenis_KHS"=>$request["Jenis_KHS"]??"Telkom",
            "Nomor_KHS"=>$request["Nomor_KHS"]??0,
            "Tanggal_Berakhir_KHS"=>$request["Tanggal_Berakhir_KHS"]??"2025-01-01",
            "Nama_Penanggung_Jawab"=>$request["Nama_Penanggung_Jawab"]??'MasterAdmin',
            "email"=>$request["email"],
            "No_HP"=>$request["No_HP"]??0,
            "Alamat_Penanggung_Jawab"=>$request["Alamat_Penanggung_Jawab"]??"Telkom Akses",
            "No_Identitas"=>$request["No_Identitas"]??0,
            "Foto_Identitas"=>$request["Foto_Identitas"]??0,
            "Jumlah_Minimal_Naker"=>$request["Jumlah_Minimal_Naker"]??0,
            "password"=>$credit,
            "Role"=>$request["Role"]
        ]);
        return redirect('admin/home');
    }
    public function adminEdit($id)
    {
        $data = User::findorfail($id);
        return view('admin/edit', compact('data'));
    }

    public function adminStore(Request $request,$id)
    {
        $data = User::findorfail($id);
        $request["password"]=bcrypt($request["password"]);
        $data->update($request->all());
        return redirect()->route('admin.home');
    }
    public function adminDestroy($id)
    {
        User::findorfail($id)->delete();
        return redirect()->route('admin.home');
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

    public function areaHome()
    {
        if(auth()->user()->id == 4){
        $data = Naker::join('users', 'user_id', '=', 'users.id')
        ->where('witel', 'LIKE', '%'.'Denpasar'.'%')
        ->select('*','nakers.id as na_id')
        ->get();
        return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 5){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Gresik'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 6){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Jember'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 7){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Kediri'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 8){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Kupang'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 9){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Madiun'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 10){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Malang'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 11){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Mataram'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 12){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Pasuruan'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 13){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Sidoarjo'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 14){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Singaraja'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }
        else if(auth()->user()->id == 15){
            $data = Naker::join('users', 'user_id', '=', 'users.id')
            ->where('witel', 'LIKE', '%'.'Surabaya'.'%')
            ->select('*','nakers.id as na_id')
            ->get();
            return view('area/home', compact('data'));
        }

    }

    public function areaEdit($id)
    {
        $data = Naker::findorfail($id);
        return view('area/edit', compact('data'));
    }
    public function areaStore(Request $request, $id){
        $data = Naker::findorfail($id);
        $data->update($request->all());
        return redirect()->route('area.home');
    }
    public function regionalHome(){
        $data = Naker::join('users', 'user_id', '=', 'users.id')
        ->where('Roles',1)
        ->select('*','nakers.id as na_id')
        ->orderBy('na_id', 'DESC')
        ->get();
        return view('regional/home', compact('data'));
    }

    public function regionalEdit($id)
    {
        $data = Naker::findorfail($id);
        return view('regional/edit', compact('data'));
    }
    public function regionalStore(Request $request, $id){
        $data = Naker::findorfail($id);
        // dd($data);
        $data->update($request->all());
        return redirect()->route('regional.home');
    }

    public function mitraHome()
    {
        $data = Naker::where('user_id', auth()->user()->id)->get();
        return view('mitra/home', compact('data'));
    }

    public function mitraTambah()
    {
        return view('mitra/tambah');
    }

    public function mitraStore(Request $request)
    {
        $ktp=$request->file('Foto_KTP')->store('Foto_KTP');
        // $ktp=$request->file('Foto_KTP')->store('Foto_KTP');
        $kontrak=$request->file('Kontrak_Kerja')->store('Kontrak_Kerja');
        // dd($request);
        $data = Naker::create([
            "Nama"=>$request["Nama"],
            "Tanggal_Lahir"=>$request["Tanggal_Lahir"],
            "Tempat_Lahir"=>$request["Tempat_Lahir"],
            "Jenis_Kelamin"=>$request["Jenis_Kelamin"],
            "Alamat"=>$request["Alamat"],
            "No_KTP"=>$request["No_KTP"],
            "Foto_KTP"=>$ktp,
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
            "Kontrak_Kerja"=>$kontrak,
            "Roles"=>$request["Roles"]??0
        ]);
        return redirect('/mitra/home');
    }
    public function mitraEdit($id)
    {
        $data = Naker::findorfail($id);
        return view('mitra/edit', compact('data'));
    }
    public function mitraUpdate(Request $request, $id){
        $data = Naker::findorfail($id);
        $data->update($request->all());
        return redirect()->route('mitra.home');
    }
    public function mitraDestroy($id)
    {
        Naker::destroy($id);
      return redirect()->back()
    ->with('success','Naker deleted successfully');
    }

    public function tlHome(){
        return view('tl.home');
    }

    public function faHome(){
        return view('fa.home');
    }

    public function ssHome(){
        return view('ss.home');
    }
    
}