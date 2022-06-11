<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function indexmapel()
    {
        $mapel = Mapel::all();
        return view('mapel.index', compact('mapel'));
    }
    public function crtmapel()
    {
        return view('mapel.create');
    }
    public function strmapel(Request $request)
    {
        $this->validate($request,[
            'mapel' => 'required',
        ]);
        mapel::create($request->all());
        return redirect('/mapel');
    } 
    public function ubahmapel($id)
    {
        $mapel = Mapel::find($id);
        return view('mapel.edit', compact('mapel'));
    }
    public function updatemapel(Request $request,$id)
    {
        $mapel = Mapel::find($id);
        $mapel->update($request->all());
        return redirect('/mapel');

    }
    public function deletemapel($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('/mapel');
    }
}
