@extends('master2')
@section('title','Database Masker')

@section('judul_halaman')
<h2>Data Masker</h2>
<h3> Surabaya</h3>

<a href="/masker/tambahMasker" class="btn btn-dark"> + Tambah Stok Masker</a>
    <br/>
    <br/>
    @endsection
    @section('konten')
    <p> Cari Data Masker: </p>
    <form action="/masker/cariMasker" method="GET">
         <input class="form-control" type="text" name="cari"
        placeholder="Cari Masker Berdasarkan Merk" value="{{ old 
        ('cari') }}">
        <input type="submit" value="CARI" class="btn btn-info">
        
</form>
<table class="table table-striped table-hover">
    <tr>
        <th>Merk Masker</th>
        <th>Stock Masker</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach($masker as $p)
    <tr>
        <td>{{ $p->masker_merkmasker }}</td>
        <td>{{ $p->masker_stockmasker }}</td>
        <td style="@if($p->masker_tersedia == 'Y') 
        background-color: green; color: white; 
        @else background-color: red; color: black; 
        @endif">
            {{ $p->masker_tersedia }}
        </td>
        
        <td>
            <a href="/masker/viewMasker/{{ $p->masker_kodemasker}}"
            class= "btn btn-success">View</a>
            |
            <a href="/masker/editMasker/{{ $p->masker_kodemasker}}"
            class= "btn btn-warning">Edit</a>
            |
            <a href="/masker/hapusMasker/{{ $p->masker_kodemasker}}"
            class= "btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{$masker -> links()}}
@endsection
            
        
