@extends('layout.user')

@section('content')

<div class="col-10 d-flex justify-content-center">
        <form method="POST" action="/storeuser" enctype="multipart/form-data">
            @csrf
            <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="guru_id" id="guru_id" style="width: 100%;">
                <option selected>Pilih Nama Guru</option>
                @foreach  ($guru as $g)
                <option value="{{$g->id}}">{{$g->namaguru}}</option>
                @endforeach
                @error('guru_id')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </select>
            <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="kelas_id" id="kelas_id" style="width: 100%;">
                <option selected>Pilih Kelas</option>
                @foreach  ($kelas as $k)
                <option value="{{$k->id}}">{{$k->namakelas}}</option>
                @endforeach
                @error('kelas_id')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </select>
            <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="mapel_id" id="mapel_id" style="width: 100%;">
                <option selected>Pilih Mata Pelajaran</option>
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
                <label for="exampleInputEmail1" class="form-label">Materi Pembelajaran</label>
                <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="matpel" style="width: 100%;">
                @error('matpel')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                <input type="date" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" style="width: 100%;">
                @error('tanggal')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mulai</label>
                <input type="time" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="mulai" style="width: 100%;">
                @error('mulai')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Selesai</label>
                <input type="time" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="selesai" style="width: 100%;">
                @error('selesai')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="jenispembelajaran" style="width: 100%;">
                <option selected>Jenis Pembelajaran</option>
                <option value="on">Online</option>
                <option value="of">Offline</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="link" style="width: 100%;">
                @error('link')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                <input type="file" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="dokumentasi" style="width: 100%;">
                @error('dokumentasi')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Absen</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="absen"></textarea>
                @error('absen')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="keterangan"></textarea>
                @error('keterangan')
                <div class="text-danger">
                {{$message}}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
        </form>
    </div>



@endsection