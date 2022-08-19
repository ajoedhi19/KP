<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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

    public function procurementEdit()
    {
        return view('procurement/edit');
    }

    
}