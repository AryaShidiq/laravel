@extends('layout.admin')

@section('content')

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/storekelas">
        @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="namakelas" style="width: 100%;">
        @error('namakelas')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Wali Kelas</label>
        <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="walas">
        @error('walas')
        <div class="text-danger">
          {{$message}}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection