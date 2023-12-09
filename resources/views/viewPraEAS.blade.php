@extends('master2')

    @section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Masker</h3>

	<br/>

    @foreach($masker as $p)
    <form action="">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-4 border">
            </div>
            <div class="col-8">

                <div class="form-group row">
                    <label for="masker_merkmasker" class="col-sm-2 control-label">Merk Masker:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="masker_merkmasker" value="{{ $p->masker_merkmasker }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="masker_stockmasker" class="col-sm-2 control-label">Stock Masker</label>
                    <div class="col-sm-8">
                        <input type="number" readonly class="form-control" id="masker_stockmasker" value="{{ $p->masker_stockmasker }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="masker_tersedia" class="col-sm-2 control-label">Tersedia:</label>
                    <div class="col-sm-8">
                        <input type="text" readonly class="form-control" id="masker_tersedia" value="{{ $p->masker_tersedia}}">
                    </div>
                </div>

                <div class="col-sm-2 align-items-center mx-auto">
                    <a href="/masker" class="btn btn-primary col-sm-8">OK</a>
                </div>

            </div>
        </div>
    </form>
    @endforeach

    @endsection


