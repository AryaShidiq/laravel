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
    <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="kelas_id" id="kelas_id" style="width: 100%;">
        @foreach  ($guru as $g)
        <option value="{{$g->id}}">{{$g->namaguru}}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection 