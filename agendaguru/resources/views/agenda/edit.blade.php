@extends('layout.admin')

@section('content')

<div class="col-10 d-flex justify-content-center">
    <form method="POST" action="/updateagenda/{{$agenda->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Guru </label>
            <input type="text" class="form-control border border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" name="namaguru" value="{{$agenda->namaguru}}"style="width: 100%;">
        </div>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="kelas_id" id="kelas_id" style="width: 100%;">
            <option selected>Pilih Kelas</option>
            @foreach  ($kelas as $k)
            <option value="{{$k->id}}">{{$k->namakelas}}</option>
            @endforeach
            </select>
        <select class="form-select form-select-lg mb-3 border border-primary" aria-label="form-select-lg example" name="mapel" style="width: 100%;">
            <option selected>{{$agenda->mapel}}</option>
            <option value="rpl">RPL</option>
            <option value="mm">Multimedia</option>
            <option value="tkj">TKJ</option>
            <option value="bc">Broadcast</option>
            <option value="tei">TEI</option>
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