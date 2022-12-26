<?php
	//memanggil file pustaka fungsi
	require "fungsi.php";

	//memindahkan data kiriman dari form ke var biasa
	//$id=$_POST["id"];
	
	$idkultawar = $_POST["idkultawar"];
	$idmatkul = $_POST["idmatkul"];
	$npp = $_POST["npp"];
	$klp = $_POST["klp"];
	$hari = $_POST["hari"];
	$jamkul = $_POST["jamkul"];
	$ruang = $_POST["ruang"];
	//$uploadOk=1;

	//membuat query
	$sql = "UPDATE kultawar SET idmatkul='".$idmatkul."', npp='".$npp."', klp='".$klp."', hari='".$hari."', jamkul='".$jamkul."', ruang='".$ruang."' WHERE idkultawar='".$idkultawar."'";
	mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	header("location:updateTawar.php");
?>