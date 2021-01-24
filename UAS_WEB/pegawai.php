
<?php 
session_start();

if (!isset($_SESSION["login"])) {

  header("Location: index.php");
  exit;

  }

require './assets/functions.php';

$pgw = query("SELECT * FROM pegawai");

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="./assets/style.css">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark">
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <img src="./assets/img/logo1.png" width="20%" class="rounded-circle img-thumbnail">
        <h1 class="display-4 text-center">Daftar Pegawai Makanan</h1>
        <p class="lead" style="margin-left: 200px;">Warung Makan PAQUITO.</p>
      </div>
    </div>

   

     <section>
      <div class="container">
        <div class="card bg-light" style="margin-top: -40px">
          <div class="card-body">
            <h3 class="display-4 text-center" style="margin-top: 30px; margin-bottom: 20px;">Daftar Pegawai</h3>
            <div class="row">
              <div class="col-md-12">
                <table class="table table-hover table-striped table-bordered">
                <thead>
                  <tr>
                    <td><b>No.</b></td>
                    <td><b>NIK</b></td>
                    <td><b>Nama</b></td>
                    <td><b>Alamat</b></td>
                    <td><b>Bagian</b></td>
                    
                  </tr>
                </thead>
                 <tbody>
                  <?php $i= 1; ?>
                <?php foreach ($pgw as $dtamnu) :?>
                 
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $dtamnu ["NIK"]; ?></td>
                      <td><?php echo $dtamnu ["nama"]; ?></td>
                      <td><?php echo $dtamnu ["alamat"]; ?></td>
                      <td><?php echo $dtamnu ["bagian"]; ?></td>
                    </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
                </tbody>
              </table>
              <a class="btn btn-secondary" style="margin-bottom: 20px; margin-top: 20px;padding-left:30px;padding-right:30px;" href="menu.php">Kembali</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
            
         

    

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>