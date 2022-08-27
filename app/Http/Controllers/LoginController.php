<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

 
        if(auth()->attempt($credentials))
        {
            if (auth()->user()->Role == 0) {
                return redirect()->route('dashboard.mitra');
            
            }
            if (auth()->user()->Role == 1){
                return redirect()->route('admin.home');
            }
            else if(auth()->user()->Role == 2){
                return redirect()->route('procurement.home');
            }
            else if(auth()->user()->Role == 3){
                return redirect()->route('regional.home');
            }
            else if(auth()->user()->Role == 4){
                return redirect()->route('area.home');
            }       
            else if(auth()->user()->Role == 5){
                return redirect()->route('fa.home');
            }
            else if(auth()->user()->Role == 6){
                return redirect()->route('tl.home');
            }
            else if(auth()->user()->Role == 7){
                return redirect()->route('ss.home');
            }
                  
            else if(auth()->user()->Role == 8){
                return redirect()->route('mitra.home');
            }
            else{
                return redirect()->route('dashboard.mitra');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}