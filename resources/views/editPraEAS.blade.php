@extends('master2')

@section('konten')
    <h2>Edit Masker</h2>

    @foreach ($masker as $p)
        <form action="/masker/updateMasker" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->masker_kodemasker }}"> <br>

            <div class = "form-group row">
                <label for = "masker_merkmasker" class = "col-sm-1 col-form--label"> Merk Masker</label>
                <div class= "col-form-label">:</div>
                <div class= "col-sm-6">
                    <input type="text" required="required" name="masker_merkmasker" value="{{$p->masker_merkmasker}}"
                        class="form-control" id="masker_merkmasker">
                </div>
            </div>

            <div class = "form-group row">
                <label for = "masker_stockmasker" class = "col-sm-1 col-form-label">Stock Masker</label>
                <div class= "col-form-label">:</div>
                <div class = "col-sm-6">
                    <input type="number" required="required" name="masker_stockmasker" value="{{ $p->masker_stockmasker }}"
                        class = "form-control" id = "masker_stockmasker">
                </div>
            </div>

            <div class="form-group row">
                <label for="masker_tersedia" class="col-sm-1 col-form-label">Tersedia</label>
                <div class="col-form-label">:</div>
                <div class="col-sm-6">
                    <input type="text" required="required" name="masker_tersedia" value="{{ $p->masker_tersedia }}" class="form-control" id="masker_tersedia" maxlength="1">
                </div>
            </div>
            

            <br/>
            <a href="/masker" class="btn btn-primary"> Kembali</a>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    @endforeach
@endsection

