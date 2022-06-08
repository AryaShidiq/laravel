<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data =  Pegawai::all();
        return view('home', compact('data'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {   
        // flash message
        $this->validate($request, [
            'nama' => 'required',
            'notelepon' => 'required', 
        ]);
        pegawai::create($request->all());
        return redirect('/home');
    }
    public function tampilan($id)
    {
        $data = Pegawai::find($id);
        return view('edit' , compact('data'));
    }
    public function update(Request $request,$id)
    {
        $data = Pegawai::find($id);
        $data->update($request->all());
        return redirect('/home');

    }
    public function destroy($id)
    {
        $data = Pegawai::find($id);
        $data->delete();
        return redirect('/home');
    }
}
