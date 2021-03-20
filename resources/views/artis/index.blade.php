@extends('layout/main')

@section('title','INI CRUD LARAVEL Artis')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3">Daftar Artis</h1>
                <table class="table">
                   <thead class="thead-dark">
                        <tr>
                            <th scope="col">no</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">foto</th>
                            <th scope="col">tanggal Lahir</th>
                            <th scope="col">alamat tinggal</th>
                            <th scope="col">Kecamatan</th>
                            <th scope="col">Kabupaten</th>
                            <th scope="col">provinsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                   </thead> 
                    <tbody>
                    @foreach($artis as $sum)
                         <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td scope="row">{{$sum->nama}}</td>
                            <td scope="row">{{$sum->tempat_lahir}}</td>
                            <td scope="row">{{$sum->foto}}</td>
                            <td scope="row">{{$sum->tanggal_lahir}}</td>
                            <td scope="row">{{$sum->alamat_tingal}}</td>
                            <td scope="row">{{$sum->id_kecamamatan}}</td>
                            <td scope="row">kabupaten</td>
                            <td scope="row">provinsi</td>
                            
                            <td scope="row">
                                <a href="/artis/create" class="badge badge-success">add</a>
                                <a href="" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
