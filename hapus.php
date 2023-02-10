<?php
include("koneksi.php");

$id = $_GET['id_peminjam'];

$sql= "DELETE FROM tb_mobil where id_mobil='$id'";
$query = mysqli_query($db, $sql);

$sql= "DELETE FROM tb_peminjam where id_peminjam='$id'";
$query = mysqli_query($db, $sql);

if($query){
    header("location:tampil.php?status=sukses");
}else{
    header("location:tampil.php?status=gagal");
}
?>