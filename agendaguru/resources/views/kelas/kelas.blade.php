@extends('layout.admin')

@section('content')

<div class="col-12">
    <a href="/createkelas" class="btn btn-primary">Tambah Data</a>
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">DATA KELAS</h6>
                </div>
            </div>
             <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Wali Kelas</th>
                                <th class="text-secondary opacity-7"></th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($kelas as $k)
                            <tr>
                                <td>
                                    <div class="d-block px-2 py-1">
                                    {{$k->namakelas}}
                                    </div>
                                </td>
                                <td>
                                    <div class="d-block px-2 py-1">
                                    {{$k->guru->namaguru}}
                                    </div>
                                </td>
                                <td class="align-items-center d-flex">
                                    <a href="/ubahkelas/{{$k->id}}" class="btn btn-warning me-2"edata-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    <form action="/deletekelas/{{$k->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <input class="btn btn-danger" type="submit" value="delete" >
                                    </form>
                                    <!-- <a href="javascript:;" class="text-secondary font-weight-bold text-xs"data-toggle="tooltip" data-original-title="Edit user">Hapus</a> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                 </table>
            </div>
        </div>
    </div>

@endsection