<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GuruController extends Controller
{
    public function indexguru()
    {
        $guru = Guru::all();
        return view('guru.home', compact('guru'));
    }
    public function crtguru()
    {
        return view('guru.createguru');
    }
    public function strguru(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'namaguru' => 'required',
            'mapel' => 'required',
            'userguru' => 'required',
            'passguru' => 'required',
        ]);
        guru::create($request->all());
        return redirect('/guru');
    }
    public function editguru($id)
    {
        $guru = Guru::find($id);
        return view('guru.edit' , compact('guru'));
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
