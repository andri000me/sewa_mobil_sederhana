<?php 
include "koneksi.php";
$query = "SELECT * FROM tb_user";
$sql = mysqli_query($conn,$query);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>List User</title>
  </head>
  <body style="background-color:#ecf0f1;">
    <div class="container-fluid mt-3">
      <?php include("navbar.php");  ?>
    </div>
    <div class="container">
      <?php 

      if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "sukses") { ?>
          <div class="alert alert-success mt-5">
            Data Berhasil di simpan
          </div>
      <?php  }else if ($_GET['pesan'] == "delete_sukses") { ?>
          <div class="alert alert-success mt-5">
            Data Berhasil di hapus
          </div>
        <?php }
      }
      ?>
      
      <div class="card mt-5">
        <div class="card-header">
          <h3 class="card-title">List User</h3>
          <a href="input_user.php" class="btn btn-info float-right">Tambah user</a>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                foreach ($sql as $row) { ?>
                <tr>
                  <td><?= $row['username']  ?></td>
                  <td><?= $row['password']  ?></td>
                  <td><?= $row['level']  ?></td>
                  <td>
                    <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn btn-success">Edit</a>
                    <a href="hapus_user.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a>
                  </td>
                </tr>
                <?php }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>