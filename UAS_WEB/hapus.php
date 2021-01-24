<?php 
session_start();

if (!isset($_SESSION["login"])) {

	header("Location: index.php");
	exit;
}

require './assets/functions.php';

$id = $_GET["id"];


	if (hapus($id)>0) {
		echo "
		<script>
		alert('Menu Berhasil di Hapus')
		document.location.href='menu.php';
		</script>";
	} else{
		echo "
		<script>
		alert('Menu Gagal di Hapus')
		document.location.href='menu.php';
		</script>";
	}

?>