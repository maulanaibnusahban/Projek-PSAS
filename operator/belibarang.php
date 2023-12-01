<?php
session_start();
$nama = $_COOKIE['nama'];
$hal = $_COOKIE['hal'];

include "koneksi.php";
$pembeli = $_POST['pembeli'];
$beli = $_POST['beli'];

// echo $pembeli."beli barang".$barang."dengan harga ".$harga."beli".$beli;
$sql = "SELECT * FROM tblbarang WHERE nama_barang='$nama'";

$hasil = $koneksi->query($sql);
$row = $hasil->fetch_assoc();
$stock = $row['stock'];

$sisa = $stock - $beli;
$update ="UPDATE tblbarang SET stock='$sisa' WHERE nama_barang='$nama'";
$hasil = $koneksi -> query($update);
header("Location:../website/tampilkan.php?hal=".$hal);




?>