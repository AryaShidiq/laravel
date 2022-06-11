<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $kelas = Kelas::all();
        return view('user.index', compact('kelas'));
    }
    public function struser(Request $request)
    {
        $user = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $user->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $user->save(); 
        }
        return redirect('/user')->withSuccess('Data Berhasil Di Tambah!');
    }
    
}
