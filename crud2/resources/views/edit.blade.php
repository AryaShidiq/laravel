@extends('layouts.main')

@section('content')

<div class="container">
    <h1 class="text-center pt-3 mb-4">Tambah Pegawai</h1>
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-body" style="width: 90%;">
                    <form method="POST" action="/update/{{$data->id}}" >
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama}}" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('nama')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <select name="jeniskelamin" class="form-select" aria-label="Default select example">
                            <option selected>{{$data->jeniskelamin}}</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No Telepon</label>
                            <input type="number" class="form-control" name="notelepon" value="{{$data->notelepon}}" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            @error('notelepon')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="update">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection