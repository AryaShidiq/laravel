@extends('layout.admin')

@section('content') 

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/updateguru/{{$guru->id}}">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIK GURU</label>
        <input type="number" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" value="{{$guru->nik}}" style="width: 100%;">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA GURU</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaguru" value="{{$guru->namaguru}}">
      </div>
      <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="mapel_id" id="mapel" style="width: 100%;">
          @foreach  ($mapel as $m)
          <option value="{{$m->id}}">{{$m->matapelajaran}}</option>
          @endforeach
          @error('mapel_id')
          <div class="text-danger">
              {{$message}}
          </div>
          @enderror
      </select>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username Guru</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="userguru" value="{{$guru->userguru}}" style="width: 100%;">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password Guru</label>
        <input type="password" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="passguru" value="{{$guru->nik}}" style="width: 100%;">
    </div>
      <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>


@endsection