<?php
// session_start();
// if (!isset($SESSION["username"])){
//   header("location:../inc/processlogin.php");
// }
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/stylelogin.css">
    </head>
        <body>
           <section class="login d-flex">
                <div class="login-left w-50 h-100">
                    <div class=" row justify-content-center align-items-center h-100">
                    <div class="col-6">
                    <div class="header">
                        <h1>Login User</h1>
                        <p>Welcome User</p>
                    </div>
                    <div class="login-form">
                        <form class="login-form" action="../inc/processlogin.php" method="POST">
                            <div class="login-form">
                        <label for="username" class=form-label>Username</label>
                        <input type="username" class="form-control" name="username" placeholder="Username">
                            </div>

                            <div class="login-form">
                        <label for="password" class=form-label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        
                        <div class="login-form">
                            <input type="submit" name="sigin" value="Login">
                        </div>

                        <span>Belum punya akun? <a href="#" class="d-inline text-decoration-none">Daftar</a></span>
                        </form>
                    </div>
                </div>
                </div>
                </div>

                <div class="login-right">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../assets/img/YamahaJakarta.jpg" class="d-block h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/YamahaJakarta.jpg" class="d-block h-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../assets/img/YamahaJakarta.jpg" class="d-block h-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
                </div>
           </section>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        </body>
    <footer>

    </footer>
</html>