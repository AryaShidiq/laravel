<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    public function indexguru()
    {
        $guru = Guru::all();
        // $guru = Guru::with('mapel')->paginate(10);
        return view('guru.home', compact('guru'));
    }
    public function crtguru()
    {
        $mapel = Mapel::all();
        return view('guru.createguru', compact('mapel'));
    }
    public function strguru(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'namaguru' => 'required',
            // 'mapel' => 'required',
            'mapel_id' => 'required',
            'userguru' => 'required',
            'passguru' => 'required',
        ]);
        guru::create($request->all());
        return redirect('/guru');
    }
    public function editguru($id)
    {
        $guru = Guru::find($id);
        $mapel = Mapel::all();
        return view('guru.edit' , compact('guru','mapel'));
    }
    public function updtguru(Request $request,$id)
    {
        $guru = Guru::find($id);
        $guru->update($request->all());
        return redirect('/guru');

    }
    public function dltguru($id)
    {
        $guru = Guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }

}
