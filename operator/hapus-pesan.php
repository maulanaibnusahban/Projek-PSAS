<?php
session_start();
$nama=$_COOKIE['nama'];
$hal=$_COOKIE['hal'];

include 'koneksi.php';
echo $nama;

$sql="DELETE FROM massage WHERE massage='$nama'";
$hasil = $koneksi -> query($sql);

header("Location:../website/massage.php?hal=".$hal);
?>
