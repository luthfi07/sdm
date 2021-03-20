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
                        <label for="nama">provinsi</label>
                        <select id="form_prov" name="provinsi">
                        
                        @foreach($provinsi as $sum  )
                        <option value='{{$sum->id}}'>{{$sum->nama}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupate">Kabupaten</label>
                        <select id="form_kab" name="kabupaten">
                        @foreach($kabupaten as $sum1)
                        <option value='{{$sum1->id}}'>{{$sum1->nama}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="kecamatan">Kecamatan</label>
                      <select id="form_kec" name="kecamatan">
                        @foreach($kecamatan as $sum2)
                        <option value='{{$sum2->id}}'>{{$sum2->nama}}</option>
                        @endforeach
                      </select> 
                    </div>
                  

                   

                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('script')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    @endpush