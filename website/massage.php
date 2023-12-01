<?php 
session_start();
if(!isset($_SESSION['user'])){
  header('Location: ../index.php');
}
include '../operator/koneksi.php';

$sql = "SELECT * FROM massage";
$hasil = $koneksi -> query($sql);
$hal = $_GET["hal"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Lihat Stock</title>
    <link rel="stylesheet" href="massage.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Pacifico&family=Poppins:ital,wght@0,500;1,400&family=Roboto:wght@500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body style="font-family: 'Poppins', sans-serif">
    <!-- NAV START -->

    <nav
      class="navbar navbar-expand-lg position-fixed"
      style="width: 100%; padding: 13px 30px 13px 30px; background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(5px)"
    >
      <div class="container-fluid">
        <img src="../img/foto-logo.png" alt="logo" width="110px" />
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto" style="gap: 30px">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="landing-page.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Lakukan Aksi</a>
              <ul class="dropdown-menu" style="background-color: rgba(255, 255, 255, 0.5); backdrop-filter: blur(5px)">
                <li><a style="color: black" class="dropdown-item" href="tampilkan.php?hal=edit">Edit Data</a></li>
                <li><a style="color: black" class="dropdown-item" href="tampilkan.php?hal=stock">Lihat Stock</a></li>
                <li><a style="color: black" class="dropdown-item" href="massage.php?hal=hapus_pesan">Kontak Masuk</a></li>
              </ul>           
            </li>
            <li class="nav-item">
              <?php if ($_SESSION['user'] == 'admin'){
                echo "<a class='nav-link' href='massage.php'>Kontak Masuk</a>";
              } else {
                echo "<a class='nav-link' href='kontak-user.php'>Kontak</a>";
              }?>
            </li>
            <li class="nav-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <a class="nav-link logout" href="#"><button>Logout</button></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- NAV END -->

    <header class="cover" style="color: #ffffff">
      <img class="bg" src="../img/foto-toko.jpg" alt="maulana" />
      <div class="user">
        <h1>Daftar Massage</h1>
      </div>
    </header>
    <div class="container-2"></div>

    <div class="judul">
      <h2>Cari Pesan yang mana nih ?</h2>
    </div>

    <div class="serch">
      <input type="search" placeholder="Cari Pesan ..." />
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
          <path
            d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"
          />
        </svg>
      </button>
    </div>

    <main>
      <table class="data-penduduk">
        <tr>
          <th>No</th>
          <th>Nama Pengirim</th>
          <th>Kontak</th>
          <th>Pesan</th>
          <th>Aksi</th>
        </tr>
        <?php
        
      $baris=1;
      while ($row = $hasil -> fetch_assoc()){
        echo "<tr>";
          echo "<td data-th='No'>".$baris."</td>";
          echo "<td data-th='Nama'>".$row['nama_pengirim']."</td>";
          echo "<td data-th='Stock'>".$row['kontak']."</td>";
          echo "<td data-th='Harga'>".$row['massage']."</td>";
          $nama = $row['massage'];
          echo "<td data-th='Aksi'><button class='btn btn-danger btn-sm' id='$nama' onclick='hapus(this,\"$hal\")'>Hapus</button></td>";
        echo "</tr>";
        $baris++;
      };
        ?>
      </table>
    </main>

    <footer>
      <div class="profil">
        <div class="fot-1">
          <h1 style="margin-bottom: 10px">Profil</h1>
          "Maulana Store" adalah toko yang mengutamakan pelayanan terbaik dalam menyediakan bahan sembako untuk kebutuhan sehari-hari. Berdiri atas
          dasar keinginan untuk mendukung ketersediaan dan akses masyarakat terhadap produk kebutuhan pokok, Kami hadir untuk memberikan kemudahan
          bagi masyarakat sekitar dalam memenuhi kebutuhan sembako sehari-hari.<br /><br />
          <a href="https://smkn1bms.sch.id/" style="color: antiquewhite; text-decoration: underline"
            >Selengkapnya
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
              <style>
                svg {
                  fill: #ffffff;
                  margin-left: 5px;
                }
              </style>
              <path
                d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z"
              /></svg
          ></a>
        </div>
      </div>
      <div class="fot-2">
        <h2 style="margin-bottom: 10px">Kontak Kami</h2>
        <span style="font-size: 13px"> Jl. Maulana No. 1 Banyumas Kode Pos 53192 Jawa Tengah</span>
        <div class="kontak">
          <p style="font-size: 14px">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <style>
                svg {
                  fill: #ffffff;
                  height: 17px;
                  margin-top: 5px;
                }
              </style>
              <path
                d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"
              />
            </svg>
            MStore@gmail.com
          </p>

          <p style="font-size: 14px">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <path
                d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"
              />
            </svg>
            0813 6782 3829
          </p>
        </div>
        <div class="image">
          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
            <path
              d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
            />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
            <path
              d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
            />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
            <path
              d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
            />
          </svg>

          <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
            <path
              d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"
            />
          </svg>
        </div>
      </div>
    </footer>

    <footer class="copy">
      <div class="fot-1-2">Website Toko <br />2023-2026 © Kementerian Komunikasi dan Informatika RI.</div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">Yakin ingin keluar dari ADS?</div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <a href="../index.php"><button type="button" class="btn btn-danger">OK</button></a>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Modal -->

    <script>
    function hapus(btn,hal){
	      nama = btn.id;
	      document.cookie = "nama=" + nama + "; path=/";
        document.cookie = "hal=" + hal + "; path=/";

	      if (confirm("Yakin hapus Pesan ini ?")) {
        window.location.href = "../operator/hapus-pesan.php"
	      }  else {
        }   
      }
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
