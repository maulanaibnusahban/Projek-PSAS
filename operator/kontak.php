<?php

session_start();
include 'koneksi.php';

// echo $nama,$kontak,$pesan;

$nama = $_POST['nama'];
$kontak = $_POST['kontak'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO `massage` (`nama_pengirim`, `kontak`, `massage`) VALUES ('$nama', '$kontak', '$pesan')";
$koneksi->query($sql);

header("Location: ../website/kontak-user.php");

?>