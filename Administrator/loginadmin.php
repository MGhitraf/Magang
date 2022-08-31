<?php
session_start();
if(!isset($_SESSION['namaadmin'])){
  echo"<script language = 'Javascript'>
        confirm('Anda Harus Login Kembali!');
        document.location='index.php';
      </script>";
}
include"../inc/koneksi.php";
$sqlu = mysqli_query($con, "Select * from tbl_user where username = '$_SESSION[namaadmin]'");
$ru = mysqli_fetch_array($sqlu);
?>