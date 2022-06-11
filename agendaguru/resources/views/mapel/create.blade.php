@extends('layout.admin')

@section('content')

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/storemapel">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">MAPEL</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="mapel" style="width: 100%;">
        @error('mapel')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection