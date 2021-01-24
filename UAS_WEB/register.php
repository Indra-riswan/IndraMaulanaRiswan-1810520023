<?php 
session_start();

if (!isset($_SESSION["login"])) {

  header("Location: index.php");
  exit;
  }



require './assets/functions.php';

if (isset($_POST["register"])) {
    
     if (registrasi($_POST)>0) {
        echo "

            <script>
            alert('User berhasil di tambah')
            document.location.href='index.php';
            </script>";
       } else {

       echo mysqli_error($conn);
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
    
    <link rel="stylesheet" type="text/css" href="./assets/style.css">

    <title>Halaman Login</title>
  </head>
  <body>
    <section class="container-fluid bg" style="background: url(./assets/img/pat.jpg) no-repeat; background-size: cover; height: 100vh;">
    	<section class="row justify-content-center">
    		<section class="col-12 col-sm-6 col-md-3">
    			<form style="box-shadow: 0px 0px 10px 0px #000; border-radius: 10px; background: #fff; padding: 30px; position: absolute; top: 10vh;" action="" method="post">
				  <div class="form-group mb-4 ">
				    <label for="nik" class="mb-2"> NIK</label>
				    <input type="number" class="form-control" id="nik" name="NIK" aria-describedby="emailHelp" placeholder="Masukan Nik">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group mb-4">
				    <label for="passwd" class="mb-2">Password</label>
				    <input type="password" class="form-control" id="passwd" name="password" placeholder="Password">
				  </div>
                  <div class="form-group mb-4">
                    <label for="passwd2" class="mb-2">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="passwd2" name="password2" placeholder="Password">
                  </div>
				  <div class="form-group form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label mb-3" for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" class="btn btn-primary col-12" name="register" style="margin-bottom: 10px;">Daftar</button>
                  <a class="btn btn-success col-12" style="margin-bottom: 10px;" href="menu.php">Back</a>
				</form>
    		</section>
    	</section>
    		
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