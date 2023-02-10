<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>
<body>
    <table border = "0">
        <h1>Edit Data</h1>
            <form action = "proses-edit.php" method = "POST">
            <form>
                <fieldset>
                    <input type = "hidden" name = "id_peminjam" value="<?php echo $row['id_peminjam']?>"/>
                    <p>
                        <tabel for="nama_peminjam" value="<?php $row['nama_peminjam']?>">Nama Peminjam :</tabel>
                        <input type="text" name="nama_peminjam"/>
</p>
<p>
    <tabel for="alamat" value="<?php $row['alamat']?>">Alamat :</tabel>
    <input type="text" name="alamat"/>
</p>
<p>
    <tabel for="umur" value="<?php $row['umur']?>">Umur :</tabel>
    <input type="number" name="umur"/>
</p>
<p>
    <tabel for="keperluan" value="<?php $row['keperluan']?>">Keperluan :</tabel>
    <input type="text" name="keperluan"/>
</p>
<p>
    <tabel for="jaminan" value="<?php $row['jaminan']?>">Jaminan :</tabel>
    <input type="text" name="jaminan"/>
</p>
<p>
    <tabel for="plat_nomor" value="<?php $row['plat_nomor']?>">Plat Nomor :</tabel>
    <input type="text" name="plat_nomor"/>
</p>
<p>
    <tabel for="merek" value="<?php $row['merek']?>">Merek :</tabel>
    <input type="text" name="merek"/>
</p>
<p>
    <tabel for="jenis_mobil" value="<?php $row['jenis_mobil']?>">Jenis Mobil :</tabel>
    <input type="text" name="jenis_mobil"/>
</p>
<p>
    <tabel for="tahun_mobil" value="<?php $row['tahun_mobil']?>">Tahun Mobil :</tabel>
    <input type="number" name="tahun_mobil"/>
</p>
<p>
    <tabel for="tanggal_pinjam" value="<?php $row['tanggal_pinjam']?>">Tanggal Pinjam :</tabel>
    <input type="date" name="tanggal_pinjam"/>
</p>
<p>
    <tabel for="tanggal_kembali" value="<?php $row['tanggal_kembali']?>">Tanggal Kembali :</tabel>
    <input type="date" name="tanggal_kembali"/>
</p>
<p>
    <input type="submit" value="kirim data" name="kirim-data"/>
</p>
</fieldset>
</form>
</body>
</html>