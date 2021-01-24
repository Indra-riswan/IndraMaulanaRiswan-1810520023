
<?php 
session_start();

if (!isset($_SESSION["login"])) {

  header("Location: index.php");
  exit;
  }

require './assets/functions.php';

$id=$_GET["id"];
$tampil = query("SELECT * FROM menu WHERE id = $id")[0];

if (isset($_POST["submit"])) {

  if (ubah($_POST)>0) {
        echo "

            <script>
            alert('Menu berhasil di ubah')
            document.location.href='menu.php';
            </script>";
       } else {

        // echo("Error description: " . mysqli_error($con));

        echo "

            <script>
            alert('menu gagal di ubah')
            document.location.href='menu.php';
            </script>";

       }

}





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
        <h1 class="display-4 text-center">Tambah Menu Makanan</h1>
        <p class="lead" style="margin-left: 200px;">Warung Makan PAQUITO.</p>
      </div>
    </div>

    <section>
      <div class="container">
        <div class="card" style="margin-top: -40px; border-radius: 10px; box-shadow: 0px 0px 10px 0px #000">
          <div class="card-body">
            <form style="padding: 30px;" action="" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $tampil['id'];?>">
              <input type="hidden" name="gambarlama" value="<?php echo $tampil['gambar'];?>">

              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                <label for="nama" class="form-label">Nama Makanan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $tampil["nama"]; ?>">
                </div>
                <div class="mb-3">
                <label for="harga" class="form-label">Harga Makanan</label>
                <input type="number" class="form-control" id="harga" name="harga" value="<?= $tampil["harga"]; ?>" >
                </div>
                <div class="row">
                  <h7>Default Image</h7>
                  <div class="col">
                    <img src="./assets/img/<?php echo $tampil['gambar'];?>" style="width: 100px;" class="img-thumbnail mb-3"alt="...">
                  </div>
                  </div>
                <div class="mb-3">
                <label for="gambar" class="form-label">Ganti Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar">  
                </div>                   
                </div> 
              </div>
              <button type="submit" name="submit" class="btn btn-primary btn-md">Ubah Menu!</button>
            </form>
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