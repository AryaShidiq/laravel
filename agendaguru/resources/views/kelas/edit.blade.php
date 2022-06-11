@extends('layout.admin')

@section('content')

<div class="col-8">
    <form method="POST" action="/updatekelas/{{$kelas->id}}">
        @method('put')
        @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="namakelas" style="width: 100%;" value="{{$kelas->namakelas}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="walas" value="{{$kelas->walas}}">
    </div>
    <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection