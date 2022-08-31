<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
    include"koneksi.php";

    $query = mysqli_query($con,"insert into tbl_user(username, password, status) value('$_POST[username]','$_POST[password]','$_POST[status]')");  

  echo"<script language = 'JavaScript'>
  document.location='../Login/login.php';
  </script>";
        }
?>