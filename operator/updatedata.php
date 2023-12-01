<?php
session_start();

$hal = $_SESSION['hal'];
$nama = $_SESSION['nama'];

include 'koneksi.php';

$barang = $_POST['barang'];
$stock = $_POST['stock'];
$harga = $_POST['harga'];

echo $hal;

$sql="UPDATE tblbarang SET nama_barang='$barang',stock='$stock',harga='$harga' WHERE nama_barang='$nama'";
$hasil = $koneksi -> query($sql);
header("Location:../website/tampilkan.php?hal=".$hal);

?>