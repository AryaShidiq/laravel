<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function indexkelas()
    {
        $kelas = Kelas::all();
        return view('kelas.kelas', compact('kelas'));
    }
    public function crtkelas()
    {
        return view('kelas.create');
    }
    public function strkelas(Request $request)
    {
        $this->validate($request,[
            'namakelas' => 'required',
            'walas' => 'required',
        ]);
        kelas::create($request->all());
        return redirect('/kelas');
    } 
    public function ubahkelas($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
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
