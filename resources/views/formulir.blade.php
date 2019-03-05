<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tutorial laravell</title>
</head>
<body>
    
    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value = "<?php echo csrf_token()?>">

        Nama :
        <input type="text" name="nama" id=""> <br/>
        Alamat :
        <input type="text" name="alamat" id=""> <br/>
        <input type="submit" value="Simpan">

    </form>

</body>
</html>