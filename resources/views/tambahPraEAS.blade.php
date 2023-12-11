@extends('master2')
@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Masker</h3>

    <br>
    <br>

<form action="/masker/storeMasker" method="post">
    {{csrf_field()}}
    <div class = "form-group row">
        <label for = "masker_merkmasker" class = "col-sm-2 control-label">Merk Masker</label>
        <div class = "col-sm-8">
            <input name="masker_merkmasker" type="text"
            class = "form-control" id="masker_merkmasker"
            placeholder="Isi Merk Masker">
        </div>
    </div>
    <div class ="form-group row">
        <label for = "masker_stockmasker" class = "col-sm-2 control-label>">Stock masker</label>
        <div class = "col-sm-8">
            <input name="masker_stockmasker" type ="number"
            class = "form-control" id= "masker_stockmasker" placeholder=" Isi stok">
        </div>
    </div>

    <div class ="form-group row">
        <label for = "masker_tersedia" class = "col-sm-2
        control-label">Tersedia</label>
        <div class = "col-sm-8">
            <input name = "masker_tersedia" type = "text" class = "form-control" id="masker_tersedia" placeholder="Apakah Masker Tersedia" maxlength="1">
        </div>
    </div>

    <div class="col-sm-2 align-items-center mx-auto">
        <input type="submit" class="btn btn-primary" value="Simpan">
    </div>
    @endsection
