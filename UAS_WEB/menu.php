
<?php 
session_start();

if (!isset($_SESSION["login"])) {

  header("Location: index.php");
  exit;

  }

require './assets/functions.php';

$mnu = query("SELECT * FROM menu");



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
        <h1 class="display-4 text-center">Daftar Menu Masakan</h1>
        <p class="lead" style="margin-left: 200px;">Warung Makan PAQUITO.</p>
        <p class="lead" style="margin-left: 200px;">NIM  : 1810520023 <br> Tema  : Masakan</p>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="card" style="margin-top: -40px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000">
          <div class="card-body">
            <h1 class=" display-4 text-center">Halaman Website Admin</h1>
             <a class="btn btn-primary" style="margin-bottom: 40px; margin-top: 20px; margin-right: 5px;" href="tambah.php">Tambah Menu Makanan</a>
              <a class="btn btn-primary" style="margin-bottom: 40px; margin-top: 20px; margin-right: 5px;" href="register.php">Tambah Admin!</a>
              <a class="btn btn-success" style="margin-bottom: 40px; margin-top: 20px; margin-right: 5px;" href="pegawai.php">Daftar Pegawai</a>
             <a class="btn btn-danger" style="margin-bottom: 40px; margin-top: 20px" href="logout.php">Logout</a>

             
            <div class="row">
              <?php foreach ($mnu as $dtamnu) :?>
              <div class="col-md-3">

                
                <div class="card mb-4 jarak" style="width: 15rem; height:22rem;  box-shadow: 0px 0px 10px 0px #000">
                  <img src="./assets/img/<?php echo $dtamnu ["gambar"]; ?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h4 class="card-text" style="margin-top: px;"><?php echo $dtamnu ["nama"]; ?></h4>
                    <h6 class="card-text" style="margin-bottom: 30px;">Rp.<?php echo $dtamnu["harga"]; ?></h6>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                          <a href="ubah.php?id=<?= $dtamnu["id"];?> " class="btn btn-success ">Ubah</a>
                          <a href="hapus.php?id=<?= $dtamnu["id"];?>" class="btn btn-danger">Hapus</a>
                        </div>
                  </div>
                </div>
                
            
              </div>
              <?php endforeach; ?>
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