<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('pengguna.home');
    }
    public function add(){
        return view('pengguna.add-pengguna');
    }
    public function pengguna(){
        $data['pengguna'] = User::all();
        $data['user'] = User::first();
        $data['total_pengguna'] = User::all()->count();
        $data['total_level'] = User::groupBy('level')->get()->count();
        $data['total_admin'] = User::where('level', 'admin')->count();
        $data['total_petugas'] = User::where('level', 'petugas')->count();
        return view('pengguna.tabel-pengguna', $data);
    }

    public function create(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'level' => 'required',
        ]);
       User::create($credentials);
        return redirect('/pengguna');
    }
    public function update(Request $request){
        $credentials = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            // 'level' => 'required',
        ]);
      User::where('id', $request->id)->update($credentials);
        return redirect('/pengguna');
    }
    public function delete(Request $request){
      User::where('id', $request->id)->delete();
        return redirect('/pengguna');
    }
}
