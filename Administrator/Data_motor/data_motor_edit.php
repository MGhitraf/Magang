
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include "header.php";
    ?>
  </head>
  <body>
    <?php
      include "../navbar.php";
    ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Recent Data</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                            <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <h5 class="card-header">Input Data Motor</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">

                      <form method="POST" enctype="multipart/form-data">
                      <label class="form-label" for="basic-default-password32">Tanggal Masuk :</label>
                      <div class="input-group input-group-merge">
                      <input type="date" name="tanggal_masuk" class="form-control" placeholder="Masukkan Tanggal"/>
                      </div>&nbsp;<br>

                      <label class="form-label" for="basic-default-password32">Nama Motor :</label>
                      <div class="input-group input-group-merge">
                      <input type="text" name="nm_product" class="form-control" placeholder="Masukkan Nama Motor"/>
                      </div>&nbsp;<br>

                      <label class="form-label" for="basic-default-password32">Jumlah Motor :</label>
                      <div class="input-group input-group-merge">
                      <input type="text" name="jml_motor" class="form-control" placeholder="0" />
                      </div>&nbsp;<br>

                      <label class="form-label" for="basic-default-password32">Status :</label>
                      <div class="input-group input-group-merge">
                      <input type="text" name="status" class="form-control" placeholder="Masukkan Status"/>
                      </div>&nbsp;<br>

                      <div class="input-group">
                        <center><input type="submit" class="btn btn-primary" name="simpan" value="Simpan Data">
                        <input type="reset" class="btn btn-dark" name="reset" value="Reset Data"></center>
                      </div>

                      </form>
                    </div>
                    <?php
                    include '../../inc/koneksi.php';
                    $db = new Database();
                    $conn = $db->getCon();

                    if(!empty($_POST['simpan']))
                    {
                      $tanggal_masuk = $_POST['tanggal_masuk'];
                      $jml_motor = $_POST['jml_motor'];
                      $status = $_POST['status'];
                      $nm_product = $_POST['nm_product'];
                        
                      $query = "UPDATE INTO yamaha.tbl_product (tanggal_masuk,jml_motor,status,nm_product) WHERE (:tanggal_masuk,:jml_motor,:status,:nm_product)";
                      $statement = $conn->prepare($query);
                      $statement->execute();

                      echo '<script>alert("Berhasil update Data");window.location="data_motor.php"</script>';
                    }

                    ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            </div>
            <div class="row ">
            </div>
            <div class="row">
            </div>
          </div>
          <!-- content-wrapper ends -->
          <?php
            include "footer.php";
          ?>
  </body>
</html>