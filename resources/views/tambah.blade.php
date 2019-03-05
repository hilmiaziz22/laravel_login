<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial CRUD Laravel</title>
</head>
<body>

    <h2><a href="https://22ituhilmi.blogspot.com">www.22ituhilmi.blogspot.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai">Kembali</a>

    <br/>
    <br/>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br/>
        Jabatan <input type="text" name="jabatan" required="required"> <br/>
        Umur <input type="text" name="umur" required="required"> <br/>
        Alamat <textarea name="alamat" required="required"></textarea> <br/>
        <input type="submit" value="Simpan Data">
    </form>
</body>
</html>