@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">Dewi Maharani</a></h2>
    <h3>Data Karyawan</h3>

    <br>
    <br>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif

<form action="/karyawan/storeKaryawan" method="post">
    {{csrf_field()}}
    <div class = "form-group row">
        <label for = "ID" class = "col-sm-2 control-label">Kode Pegawai</label>
        <div class = "col-sm-8" {{ $errors->get('kodepegawai') ? 'has-error' : '' }}>
            <input name="kodepegawai" type="text"
            class = "form-control" id="kodepegawai"
            placeholder="Masukkan Kode Pegawai" maxlength="5">
        
        </div>
    </div>

    <div class ="form-group row">
        <label for = "NRP" class = "col-sm-2 control-label>">Nama Lengkap</label>
        <div class = "col-sm-8">
            <input name="namalengkap" type ="text"
            class = "Masukkan NRP" id= "namalengkap" placeholder=" Masukkan Nama Lengkap" maxlength="50">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "divisi" class = "col-sm-2
        control-label">Divisi</label>
        <div class = "col-sm-8">
            <input name = "divisi" type = "text" class = "form-control" id="divisi" placeholder="Masukkan Nama Divisi" maxlength="20">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "departemen" class = "col-sm-2
        control-label">Departemen</label>
        <div class = "col-sm-8">
            <input name = "departemen" type = "text" class = "form-control" id="SKS" placeholder="Masukkan Nama Departemen" >
        </div>
    </div>


    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
    @endsection

    
