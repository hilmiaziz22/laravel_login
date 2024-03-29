<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial CRUD Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  <!-- <style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
    </style> -->


    <div class="container">
        <div class="card">
            <div class="card-body">


            <h2 class="text-center">www.22ituhilmi.blogspot.com</h2>
    <h3>Data Pegawai</h3>
    <p>Cari Data Pegawai</p>
    
    <div class="form-group">
    </div>
    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br/>

    
    <form action="/pegawai/cari" method="get">
        <input type="text" name="cari" placeholder="Cari Pegawai ...." value="{{ old('cari') }}">
        <input type="submit" value="Cari">
    </form>

    <br/>

    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>

        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>

    <br/>
    Halaman : {{ $pegawai->currentPage() }} <br/>
    Jumlah Data : {{ $pegawai->total() }} <br/>
    Data Perhalaman : {{ $pegawai->perPage() }} <br/>

    {{ $pegawai->links() }}
            
            
            
            </div>
        </div>
    </div>

    
    

</body>
</html>