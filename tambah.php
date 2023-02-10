<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
    <table border = "0">
        <h1>Input Data</h1>
        <form action="proses-tambah.php" method = "POST">
            <form>
                <fieldset>
                    <p>
                        <tabel for="nama_peminjam">Nama Peminjam :</tabel>
                        <input type="text" name="nama_peminjam"/>
</p>
<p>
    <tabel for="alamat">Alamat :</tabel>
    <input type="text" name="alamat"/>
</p>
<p>
    <tabel for="umur">Umur :</tabel>
    <input type="number" name="umur"/>
</p>
<p>
    <tabel for="keperluan">Keperluan :</tabel>
    <input type="text" name="keperluan"/>
</p>
<p>
    <tabel for="jaminan">Jaminan :</tabel>
    <input type="text" name="jaminan"/>
</p>
<p>
    <tabel for="plat_nomor">Plat Nomor :</tabel>
    <input type="text" name="plat_nomor"/>
</p>
<p>
    <tabel for="merek">Merek :</tabel>
    <input type="text" name="merek"/>
</p>
<p>
    <tabel for="jenis_mobil">Jenis Mobil :</tabel>
    <input type="text" name="jenis_mobil"/>
</p>
<p>
    <tabel for="tahun_mobil">Tahun Mobil :</tabel>
    <input type="number" name="tahun_mobil"/>
</p>
<p>
    <tabel for="tanggal_pinjam">Tanggal Pinjam :</tabel>
    <input type="date" name="tanggal_pinjam"/>
</p>
<p>
    <tabel for="tanggal_kembali">Tanggal Kembali :</tabel>
    <input type="date" name="tanggal_kembali"/>
</p>
<p>
    <input type="submit" value="kirim data" name="kirim-data"/>
</p>
</fieldset>
</form>
</body>
</html>