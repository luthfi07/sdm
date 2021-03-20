@extends('layout/main')

@section('title','Tambah Data Artis')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Data Artis</h1>
                <form method="post" action="/artis">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nama">Tempat lahir</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="tempat lahir" name="tempat_lahir">
                    </div>
                      <div class="form-group">
                        <label for="nama">tanggal lahir</label>
                        <input type="date" class="form-control" id="formGroupExampleInput"  name="tanggal_lahir">
                    </div>
                   
                      <div class="form-group">
                        <label for="nama">foto</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="foto" name="foto">
                    </div>
                    
                      <div class="form-group">
                        <label for="nama">alamat tinggal</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="alamat" name="alamat_tinggal">
                    </div>
                  
                      <div class="form-group">
                        <label for="nama">Kecamatan</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="id_kecamatan" name="id_kecamatan">
                    </div>
                  
                      <div class="form-group">
                        <label for="nama">Kabupaten</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="id_kecamatan" name="id_kecamatan">
                    </div>
                   
                      <div class="form-group">
                        <label for="nama">provinsi</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="id_kecamatan" name="id_kecamatan">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection