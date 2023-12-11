@extends('master2')
@section('title','Database Karyawan')

@section('judul_halaman')
<h2>Data Karyawan</h2>
<h3> Surabaya</h3>


    <br/>
    <br/>
    @endsection
    @section('konten')

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        
</form>
</form>
<table class="table table-striped table-hover">
    <tr >
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>

    </tr>
    @foreach($karyawan as $p)
    <tr>
        <td>{{ $p->kodepegawai }}</td>
        <td>{{ strtoupper($p->namalengkap) }}</td>
        <td>{{ $p->divisi }}</td>
        <td>{{ strtolower($p->departemen) }}</td>
        
        <td>
            <a href="/karyawan/hapusKaryawan/{{ $p->kodepegawai}}" class="btn btn-danger">Hapus Data</a>
        </td>
    </tr>
    @endforeach
</table>

<a href="/karyawan/tambahKaryawan" class="btn btn-dark"> + Tambah Data</a>
{{$karyawan -> links()}}
@endsection



        
