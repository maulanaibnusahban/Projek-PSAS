<?php
session_start();
$nama=$_COOKIE['nama'];
$hal=$_COOKIE['hal'];

include 'koneksi.php';
echo $nama;

$sql="DELETE FROM tblbarang WHERE nama_barang='$nama'";
$hasil = $koneksi -> query($sql);

header("Location:../website/tampilkan.php?hal=".$hal);
?>
