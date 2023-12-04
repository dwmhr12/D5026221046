<!DOCTYPE html>
<html>
<head>
    <title>Edit Pegawai - www.malasngoding.com</title>
</head>
<body>
 
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>
    
    <a href="{{ url()->previous() }}"> Kembali</a>
    
    <br/>
    <br/>
    
    @if(session('status'))
        <p>{{ session('status') }}</p>
    @endif
    
    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
        Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
        Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
        Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
        <input type="submit" value="Update Pegawai">
    </form>
    @endforeach
    
</body>
</html>