
<?php 
$conn = mysqli_connect("localhost", "root", "", "kuliner");

function query($table){
	global $conn;
	$masukdbms = mysqli_query($conn, $table);
	$wadah = [];
	while ($dtamnu = mysqli_fetch_assoc($masukdbms)) {
		$wadah[]=$dtamnu;
	}
	return $wadah;
}

function Tambah($dta){
	global $conn;

	$nama = ($dta["nama"]);
	$harga = ($dta["harga"]);

	$gambar = upload();
		if (!$gambar) {
			return false;
		}

	$ambildata = "INSERT INTO menu VALUES
				('', '$nama', $harga, '$gambar')";

	mysqli_query($conn, $ambildata );

	return mysqli_affected_rows($conn);
}


function upload(){

	$namaFile = $_FILES["gambar"]["name"];
	$ukuranFile = $_FILES["gambar"]["size"];
	$error = $_FILES["gambar"]["error"];
	$tmpName = $_FILES["gambar"]["tmp_name"];

	if ($error === 4) {

		echo "
			<script>
			alert('Pilih Gambar Bang Jago!!!!');
			</script>";
			return false;
	}

	$gambarvalid = ['jpg', 'jpeg', 'png'];
	$ekstensigambar = explode('.', $namaFile);
	$ekstensigambar = strtolower(end($ekstensigambar));

	if( !in_array($ekstensigambar, $gambarvalid) ){
		echo "
			<script>
			alert('Yang dii Upload bukan gambar!!!!');
			</script>";
			return false;
	}

	if ($ukuranFile > 1000000) {
		echo "
			<script>
			alert('Gambar Terlalu Besar!!!!');
			</script>";
			return false;
	}
			$namaFilebaru= uniqid();
			$namaFilebaru .= '.';
			$namaFilebaru .= '$ekstensigambar';
			move_uploaded_file($tmpName, './assets/img/'.$namaFilebaru);


			return $namaFilebaru;

	
}

function ubah($data){
	global $conn;

	$id = ($data["id"]);
	$nama =htmlspecialchars(($data["nama"]));
	$harga =htmlspecialchars(($data["harga"]));
	$gambarlama = htmlspecialchars(($data["gambarlama"]));

	if ($_FILES ['gambar']['error']===4) {
		$gambar = $gambarlama;
	} else {
		$gambar = upload();
	}


	$query = "UPDATE menu SET 
				nama = '$nama',
				harga = '$harga',
				gambar = '$gambar'
				Where id = $id";

	mysqli_query($conn, $query );

	return mysqli_affected_rows($conn);
}

function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM menu WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function registrasi($data){
	global $conn;

	$nik = $data["NIK"];
	$paswd = mysqli_real_escape_string($conn, $data["password"]);
	$paswd2 = mysqli_real_escape_string($conn, $data["password2"]);

	$cek = mysqli_query($conn, "SELECT NIK FROM admin WHERE NIK = $nik");

	if (mysqli_fetch_assoc($cek)) {
		echo "<script>
            alert('ADMIN sudah Terdaftar!!');
            </script>";

            return false;
	}

	if ($paswd !== $paswd2) {

		echo "

            <script>
            alert('konfirmasi password salah!!');
            </script>";

            return false;
	}

	$password = password_hash($paswd, PASSWORD_DEFAULT);

	$masukan = "INSERT INTO admin VALUES
				('', $nik, '$password')";

	mysqli_query($conn, $masukan );

	return mysqli_affected_rows($conn);


}
	















?>