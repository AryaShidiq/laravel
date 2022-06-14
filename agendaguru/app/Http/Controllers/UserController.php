<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function indexuser()
    {
        $user = Agenda::with('kelas','guru','mapel');
        $kelas = Kelas::all();
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('user.index', compact('kelas','guru','mapel'));
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
