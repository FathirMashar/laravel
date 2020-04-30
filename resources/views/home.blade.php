@extends('layout/input')

@section('judul', 'belajar')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Berhasil {{$judul}}</h1>
            </div>
        </div>
    </div>
@endsection
