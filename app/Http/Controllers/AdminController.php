<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitra;


class AdminController extends Controller
{
    public function index()
    {
        $data = Mitra::all();
        // dd($data);
        return view('dashboard.Admin.dashboard', compact('data'));
    }
}