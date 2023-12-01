<?php
session_start();
include 'koneksi.php';

$pelanggan=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM tbluser WHERE user='$pelanggan' AND pass='$password'";

$hasil=$koneksi -> query ($sql);

$row=$hasil -> fetch_assoc();
echo $row['sebagai'];

if ($hasil->num_rows){
    if($row['sebagai'] == 'admin'){
        header('Location: ../website/landing-page.php');
        $_SESSION['login']='sukses';
        $_SESSION['user']=$row['user'];
        $_SESSION['foto']=$row['foto'];
        $_SESSION['user']=$row['sebagai'];
    } else {
        header('Location: ../website/landing-page-user.php');
        $_SESSION['login']='sukses';
        $_SESSION['user']=$row['user'];
        $_SESSION['foto']=$row['foto'];
        $_SESSION['user']=$row['sebagai'];
    };
    
   
} else {
    header('Location: ../index.php');
    $_SESSION['login']='gagal';
};

?>
