@extends('layouts.master')
@section('title','Edit Anggota')
@section('heading','Edit Anggota')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/anggota/{{$cus->id}}">
                @method('PUT')
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nisn</label>
                    <input type="text" name="nisn" value="{{$ang->nisn}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Anggota</label>
                    <input type="text" name="nama" value="{{$ang->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tempatLahir" value="{{$ang->tempatLahir}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggalLahir" value="{{$ang->tanggalLahir}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenisKelamin" value="{{$ang->jenisKelamin}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Agama</label>
                    <input type="text" name="agama" value="{{$ang->agama}}" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection