<?php
session_start();
if(!isset($_SESSION['namapengunjung'])){
  echo"<script language = 'Javascript'>
        confirm('Anda Harus Login Kembali!');
        document.location='index.php';
      </script>";
}
include"../koneksi.php";
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
        </div>
      </div>
    </div>
    
    <nav class="nav">
      <script type="text/javascript">
        <section class="home">

          <section class="latest top">
          <div class="scontainer">
          <div class="heading">
          <h1>Latest Popular Bike</h1>
          <div class="line flex1">
          <div class="line"> <i class="fa fa-circle"></i></div>
          <button>50% OFF</button>
          <div class="line line2"> <i class="fa fa-circle"></i></div>
          </div>
          </div>

          <div class="content frid top">
          <div class="box">
          <div class="img">
          <img src=""></img>
          <div class="flex1">
          <label>50%</label>
          <i class="fa fa-heart"></i>
          </div>
          </div>

          <div class="details">
          <h3>Aerion Carrbo Helmet</h3>
          <p>(Fashion, Twin Disc)</p>
          <h2>$699 <span>$799</span></h2>
          <button ty name="button">Buy Now</button>
          </div>
          </div>
          </div>

          </div>
          </section>

          <div class="container flex">
            <div class="time-box flex">
              <div class="time">
                <h1>60 : </h1>
                <span>DAYS</span>
              </div>
              <div class="time">
                <h1>24 : </h1>
                <span>HOURS</span>
              </div><div class="time">
                <h1>58 : </h1>
                <span>MINUTES</span>
              </div>
              <div class="time">
                <h1>60 : </h1>
                <span>SECOND</span>
              </div>
            </div>

            <h2>Launching New Bike</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipis</p>

            <div class="button flex">
              <button class="btn1">Learn More</button>
              <button class="btn2">Buy Now</button>
            </div>

            <div class="right">
              <div class="ani_image">
                <image src=""></image>
              </div>
            </div>
            
          </div>
        </section>
    </script>
    </nav>

      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>