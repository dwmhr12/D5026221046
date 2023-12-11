@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Nilai</h3>

    <br>
    <br>

<form action="/nilaikuliah/storeData" method="post">
    {{csrf_field()}}
    <div class = "form-group row">
        <label for = "ID" class = "col-sm-2 control-label">ID</label>
        <div class = "col-sm-8">
            <input name="ID" type="text"
            class = "form-control" id="ID"
            placeholder="Masukkan ID">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "NRP" class = "col-sm-2 control-label>">NRP</label>
        <div class = "col-sm-8">
            <input name="NRP" type ="text"
            class = "Masukkan NRP" id= "NRP" placeholder=" Masukkan NRP" maxlength="6">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "NilaiAngka" class = "col-sm-2
        control-label">Nilai Angka</label>
        <div class = "col-sm-8">
            <input name = "NilaiAngka" type = "text" class = "form-control" id="NilaiAngka" placeholder="Masukkan Nilai Angka">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "SKS" class = "col-sm-2
        control-label">SKS</label>
        <div class = "col-sm-8">
            <input name = "SKS" type = "text" class = "form-control" id="SKS" placeholder="Masukkan Jumlah SKS" maxlength="1">
        </div>
    </div>


    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
    @endsection
