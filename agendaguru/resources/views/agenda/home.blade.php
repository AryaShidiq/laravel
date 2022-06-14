@extends('layout.admin')

@section('content')

<div class="col-12">
    <a href="/createagenda" class="btn btn-primary">Tambah Agenda</a>
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3 text-center">DATA AGENDA</h6>
            </div>
        </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NAMA GURU</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">MAPEL</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mata Pelajaran</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mulai</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Selesai</th>      
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Pembelajaran</th>      
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Link</th>      
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dokumentasi</th>         
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Absen</th>         
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keterangan</th>         
                                <th class="text-secondary opacity-7"></th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($agenda as $a)
                            <tr>
                                <td>
                                    <div class="d-block px-2 py-1">
                                    {{$a->guru->namaguru}}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-block px-2 py-1">
                                    {{$a->kelas->namakelas}}
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <div class="d-block px-2 py-1">
                                    {{$a->mapel->matapelajaran}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->matpel}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->tanggal}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->mulai}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->selesai}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->jenispembelajaran}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->link}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                        <img src="{{asset('fotobukti/'.$a->dokumentasi)}}" alt="" class="img-fluid">
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->absen}}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="d-block px-2 py-1">
                                    {{$a->keterangan}}
                                    </div>
                                </td>
                                <th class="align-items-center d-flex justify-content-center">
                                    <a href="/editagenda/{{$a->id}}" class="btn btn-warning me-3"data-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    <form action="/deleteagenda/{{$a->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="delete" >
                                    </form>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

@endsection