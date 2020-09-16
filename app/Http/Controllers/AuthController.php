<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function loginin()
    {
        return view('auth/login');
    }

    public function prosesLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) 
        {
            return view('admin/index');
        }
        else {
            return redirect()->back()->with('pesanGagal', "Email atau Kata Sandi kamu Salah ! cobain lagi ya ");
        }
    }

    public function register()
    {
        return view('auth/register');
    }
    
    public function prosesRegister(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'id_level' => 'required',
            'gambar' => 'required',
        ]);

        $reg = new User();
        $reg->nama = $validateData['nama'];
        $reg->email = $validateData['email'];
        $reg->password = bcrypt($validateData['password']);
        $reg->id_level = $validateData['id_level'];
        if ($files = $request->file('gambar')) {
            $destinationPath = 'img/foto/';
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $reg->gambar = $profileImage;
        }
        $reg->save();

        return redirect()->url('/login')->with('pesanBerhasil', "Selamat! Akun {$validateData ['nama']} Kamu, berhasil  Di Buat!");
    }

    public function logout(Request $request) 
    {
        $request->session()->flush();
        return redirect('/beranda');
    }
}
