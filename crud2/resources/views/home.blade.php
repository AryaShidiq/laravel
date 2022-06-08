@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table table-dark table-hover">
        <button type="button" class="btn btn-primary mt-3 mb-3">3 Periode</button>
        <thead>
            <tr>
                <td>ID</td>
                <td>NAMA</td>
                <td>JENIS KELAMIN</td>
                <td>NO TELEPON</td>
                <td>AKSI</td>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td>{{$row->nama}}</td>
                <td>{{$row->jeniskelamin}}</td>
                <td>{{$row->notelepon}}</td>
                <td>
                    <div class="d-flex">

                        <!-- <a href=""></a> -->
                        <a href="/tampilan/{{$row->id}}" type="button" class="btn btn-warning" name="">Edit</a>
                        <form action="/delete/{{$row->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Hancurkan">
                        </form>
                        <!-- <a href="/delete/{{$row->id}}" class="btn btn btn-danger">Hancurkan</a> -->
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
