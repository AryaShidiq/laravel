@extends('layout.admin')

@section('content')

<div class="col-10 d-flex flex-column justify-content-center">
    <h1 class="text-center">FORM GURU</h1>
    <form method="POST" action="/storeguru" class="m-auto">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIK GURU</label>
        <input type="number" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="nik" style="width: 100%;">
        @error('nik')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA GURU</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaguru">
        @error('namaguru')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
      </div>
      <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="mapel_id" id="mapel_id" style="width: 100%;">
          <option selected>Pilih Mapel</option>
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
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="userguru" style="width: 100%;">
        @error('userguru')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password Guru</label>
        <input type="password" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="passguru" style="width: 100%;">
        @error('passguru')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
    </div>
      <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection