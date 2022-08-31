<?php
session_start();
if(!isset($_SESSION['namapengunjung'])){
  echo"<script language = 'Javascript'>
        confirm('Anda Harus Login Kembali!');
        document.location='index.php';
      </script>";
}
include"../inc/koneksi.php";
$sqlu = mysqli_query($con, "Select * from tbl_user where username = '$_SESSION[namapengunjung]'");
$ru = mysqli_fetch_array($sqlu);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="stylepengunjung.css">
    
  </head>
  
  <body>
    <div id="overlay"></div> 

    <div class="container-fluid banner">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar navbar-md">
            <div class="navbar-brand">
              Yamaha
            </div>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
            </ul>
          </div>
            <div class="col-md-8 offset-md-2 info">
              <h1 class="text-center">Yamaha</h1>
              <p class="text-center">
                Jl. Letjen Suprapto Jl. Cemp. Putih No.402, RT.9/RW.7,
               Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510
              </p>
              <a href="#" class="btn btn-md text-center">Get Started</a>
            </div>
        </div>
      </div>
    </div>
    
    <div>

    </div>

      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>