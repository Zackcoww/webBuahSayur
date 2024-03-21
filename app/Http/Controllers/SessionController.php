<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("sesi.index");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        Session::Flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        // jika sukses

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password 
        ];

        if (Auth::attempt($infologin)){ // melakukan pengecekan terhadap $infologin
            // otetinkasi suskes
            return redirect('home')->with('success', 'Berhasil');
        } else {
            // otentikasi gagal
            return redirect('sesi')->withErrors('Username dan Password Salah');
        }

    }


    public function logout()
    {
        Auth::Logout();
        return redirect('sesi');
    }

    public function register() // untuk menampilkan view register
    {
        return view('sesi/register');
    }

    public function create(Request $request) // untuk memasukan data yang didapat dari form
    {
        Session::Flash('name', $request->name);
        Session::Flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users', // search uniq email pada tabel users
            'password' => 'required|min:3'
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Silahkan Masukan Email yang valid',
            'email.unique' => 'Email sudah terpakai!',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Minimal password 3 karekter',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        User::create($data);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password 
        ];

        if (Auth::attempt($infologin)){ // melakukan pengecekan terhadap $infologin
            // otetinkasi suskes
            return redirect('home')->with('success', Auth::user()->name . 'Berhasil');
        } else {
            // otentikasi gagal
            return redirect('sesi')->withErrors('Username dan Password Salah');
        }
    }
    


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
