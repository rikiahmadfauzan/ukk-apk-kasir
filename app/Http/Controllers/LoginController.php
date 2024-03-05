<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function auth(Request $request){
        $credentials = $request->validate([
            'akun' => 'required',
            'password' => 'required'
        ]);

       if(Auth::attempt(['email' => $request->akun, 'password' => $request->password])){
          if(Auth::user()->level == 'admin'){
                return redirect('/dashbord');
                }elseif(Auth::user()->level == 'petugas'){
                    return redirect('/dashbord');
                }elseif(Auth::user()->level == 'pelanggan'){

                return redirect('/home');
            }
        }elseif(Auth::attempt(['username' => $request->akun, 'password' => $request->password])){
            if(Auth::user()->level == 'admin'){
                return redirect('/dashbord');
                }elseif(Auth::user()->level == 'petugas'){
                    return redirect('/dashbord');
                }elseif(Auth::user()->level == 'pelanggan'){

                return redirect('/home');
            }
            
        }
        return redirect()->back()->withErrors('Login Anda Gagal!');

    }

    public function register(){
        return view('auth.register');
    }

    public function create(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
       User::create($credentials);
        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
