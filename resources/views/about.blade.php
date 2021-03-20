@extends('layout/main')

@section('title','ABOUT CRUD LARAVEL')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Hello, its ABOUT world!</h1>
                <h2><?=$nama?> atau {{$nama}}</h2>
            </div>
        </div>
    </div>
@endsection
