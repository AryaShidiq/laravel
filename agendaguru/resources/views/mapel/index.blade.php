@extends('layout.admin')

@section('content')

<div class="col-12">
    <!-- <a href="/createmapel" class="btn btn-primary">Tambah Data</a> -->
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createmapel">
        Tambah Mapel
        </button>

        <!-- Modal -->
        <div class="modal fade" id="createmapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mapel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
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
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3 text-center">DATA MAPEL</h6>
                </div>
            </div>
             <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <!-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th> -->
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MAPEL</th>
                                <th class="text-secondary opacity-7"></th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($mapel as $m)
                            <tr>
                                <!-- <td>
                                    <div class="d-block px-2 py-1">
                                    {{$m->id}}
                                    </div>
                                </td> -->
                                <td>
                                    <div class="d-block px-2 py-1">
                                    {{$m->mapel}}
                                    </div>
                                </td>
                                <td class="align-items-center d-flex">
                                    
                                    <a href="/ubahmapel/{{$m->id}}" class="btn btn-warning me-2"edata-toggle="tooltip" data-original-title="Edit user">Edit</a>
                                    <form action="/deletemapel/{{$m->id}}" method="POST">
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