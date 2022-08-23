<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Naker;
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

    public function mitraStore()
    {
        
    }

    
}