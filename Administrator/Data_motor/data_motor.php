<?php
  session_start();
?>
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
                            <h5 class="card-header">Data Motor</h5>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="data_motor_tambah.php" class="btn btn-primary">Tambah Data</a><br>&nbsp;

<table class="table">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Motor</th>
      <th>Tanggal Masuk</th>
      <th>Jumlah Motor</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
      include"../../inc/koneksi.php";
      $db = new Database();
      $conn = $db->getCon(); 
      $no=1;
      $query = "Select * from yamaha.tbl_product";
      $statement = $conn->prepare($query);
      $statement->execute();

      $row = $statement->fetchAll();

      

      foreach($row as $data){
        
    ?>
    <tr>
     <td><?=$no++; ?></td>
     <td><?=$data["nm_product"] ?></td>
     <td><?=$data["tanggal_masuk"] ?></td>
     <td><?=$data["jml_motor"] ?></td>
     <td><?=$data["status"] ?></td>
     <td><?php echo"<a href='data_motor_edit.php?id=$data[id_product]' class='btn btn-primary'>Edit</a>"; ?> <a href="<?php echo"data_motor_delete.php?page=data_motor_delete&&id=$data[id_product]"; ?>" class="btn btn-sm btn-warning" onclick="javascript: return confirm('Apakah Anda Yakin Menghapus Data Ini ?')">Hapus</a></td>
    </tr>
    <?php  } ?>
  </tbody>
  <tfoot class="table-border-bottom-0">
    <tr>
    <th>No</th>
      <th>Nama Motor</th>
      <th>Tanggal Masuk</th>
      <th>Jumlah Motor</th>
      <th>Status</th>
      <th>Actions</th>
    </tr>
  </tfoot>
      </table>
  </div>
</div>
</div>
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