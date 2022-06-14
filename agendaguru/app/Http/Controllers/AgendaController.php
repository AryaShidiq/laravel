<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function indexagenda()
    {
        $agenda = Agenda::with('kelas','guru','mapel')->paginate(10);
        return view('agenda.home', compact('agenda'));
    }
    public function crtagenda()
    {
        $kelas = Kelas::all(); 
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('agenda.create', compact('kelas','guru','mapel'));
    }
    public function stragenda(Request $request)
    {   
        $this->validate($request,[
            'guru_id' => 'required',
            'kelas_id' => 'required',
            'mapel_id' => 'required',
            'matpel' => 'required',
            'tanggal' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'jenispembelajaran' => 'required',
            'link' => 'required',
            'dokumentasi' => 'required',
            'absen' => 'required',
            'keterangan' => 'required',
        ]);
        $agenda = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save(); 
        }
        return redirect('/agenda');
    }
    public function editagenda($id)
    {
        $agenda = Agenda::find($id);
        $kelas = Kelas::all(); 
        $guru = Guru::all();
        $mapel = Mapel::all();
        return view('agenda.edit', compact('agenda','kelas','guru','mapel'));
    }
    public function updateagenda(Request $request,$id)
    {
        $agenda = Agenda::find($id);
        $agenda->update($request->all());
        // $agenda = agenda::create($request->al());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotobukti/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save(); 
        }
        return redirect('/agenda');
    }
    public function deleteagenda($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect('/agenda');
    }
}
