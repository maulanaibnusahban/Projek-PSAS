<?php
session_start();
if(!isset($_SESSION['user'])){
  header('Location: ../index.php');
}
$nama=$_COOKIE['nama'];
$hal=$_COOKIE['hal'];
  

include '../operator/koneksi.php';

$sql="SELECT * FROM tblbarang WHERE nama_barang='$nama'";
$hasil = $koneksi -> query($sql);

$row = $hasil->fetch_assoc();
$id = $row['id'];
$nBarang = $row['nama_barang'];
$stock = $row['stock'];
$harga = $row['harga'];

$_SESSION['nama'] = $nama;
$_SESSION['hal'] = $hal;

?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Data</title>
    <link rel="stylesheet" href="edit1.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet" />
  </head>
  <body>
    <main>
      <img class="bg" src="../img/foto-toko.jpg" alt="" />
<form method="POST" action="../operator/updatedata.php">
      <div class="container">
        <div class="judul">
          <h1>Edit data</h1>
        </div>
        <div class="input">
          <div class="box1">
            <label for="id">id</label>
            <div class="nama inp">
              <input type="text" id="id" name="id" disabled value="<?php echo $id ?>"/>
            </div>
            <label for="barang">Nama Barang</label>
            <div class="nip inp">
              <input type="text" id="barang" name="barang" value="<?php echo $nBarang ?>" />
            </div>
            <label for="stock">Stock</label>
            <div class="gen inp">
              <input type="number" id="stock" name="stock" value="<?php echo $stock ?>"/>
            </div>
          </div>
          <div class="box2">
            <label for="harga">Harga</label>
            <div class="ttl inp">
              <input type="number" id="harga" name="harga" value="<?php echo $harga ?>"/>
          </div>
        </div>
        <div class="button">
        <a href="updatedata.php"><button class="edit" type="submit">Simpan</button></a>
        <a href="tampilkan.php?hal=<?php echo $hal?>" id="link" >Batal</a>
        </div>
        </form>
        
        
      </div>
    </main>
  </body>
</html>
