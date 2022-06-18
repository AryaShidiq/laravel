<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function indexkelas()
    {
        $kelas = Kelas::all();
        // $kelas = Kelas::with('guru')->paginate(10);
        return view('kelas.kelas', compact('kelas'));
    }
    public function crtkelas()
    {   
        $guru = Guru::all();
        return view('kelas.create', compact('guru'));
    }
    public function strkelas(Request $request)
    {
        $this->validate($request,[
            'namakelas' => 'required',
            'guru_id' => 'required',
        ]);
        kelas::create($request->all());
        return redirect('/kelas');
    } 
    public function ubahkelas($id)
    {
        $kelas = Kelas::find($id);
        $guru = Guru::all();
        return view('kelas.edit', compact('kelas','guru'));
    }
    public function updatekelas(Request $request,$id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/kelas');

    }
    public function deletekelas($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas');
    }
}
