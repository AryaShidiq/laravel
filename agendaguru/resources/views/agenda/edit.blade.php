@extends('layout.admin')

@section('content')

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/updateagenda/{{$agenda->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="guru_id" id="guru_id" style="width: 100%;">
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
            @foreach  ($kelas as $k)
            <option value="{{$k->id}}">{{$k->namakelas}}</option>
            @endforeach
        </select>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="mapel_id" id="mapel_id" style="width: 100%;">
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
            <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="matpel"  value="{{$agenda->matpel}}" style="width: 100%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tanggal</label>
            <input type="date" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="tanggal" value="{{$agenda->tanggal}}" style="width: 100%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mulai</label>
            <input type="time" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="mulai" value="{{$agenda->mulai}}" style="width: 100%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Selesai</label>
            <input type="time" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="selesai" value="{{$agenda->selesai}}" style="width: 100%;">
        </div>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="jenispembelajaran" style="width: 100%;">
            <option selected>{{$agenda->jenispembelajaran}}</option>
            <option value="on">Online</option>
            <option value="of">Offline</option>
        </select>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
            <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="link" value="{{$agenda->link}}" style="width: 100%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
            <input type="file" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="dokumentasi" value="{{$agenda->dokumentasi}}" style="width: 100%;">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Absen</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="55" name="absen">{{$agenda->absen}}</textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="55" name="keterangan">{{$agenda->keterangan}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="submit" value="save">Submit</button>
    </form>
</div>

@endsection