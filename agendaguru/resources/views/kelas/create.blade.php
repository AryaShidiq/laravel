@extends('layout.admin')

@section('content')

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/storekelas">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
            <input type="text" class="form-control border border-primary" id="exampleInputEmail1"
                aria-describedby="emailHelp" name="namakelas" style="width: 100%;">
            @error('namakelas')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </div>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example"
            name="guru_id" id="guru_id" style="width: 100%;">
            <option selected>Pilih Guru</option>
            @foreach ($guru as $g)
            <option value="{{$g->id}}">{{$g->namaguru}}</option>
            @endforeach
            @error('guru_id')
            <div class="text-danger">
                {{$message}}
            </div>
            @enderror
        </select>
        <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection
