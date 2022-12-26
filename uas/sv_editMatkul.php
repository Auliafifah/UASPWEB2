<?php
	//memanggil file pustaka fungsi
	require "fungsi.php";

	//memindahkan data kiriman dari form ke var biasa
	//$id=$_POST["id"];
	
	$idmatkul = $_POST["idmatkul"];
	$namamatkul = $_POST["namamatkul"];
	$sks = $_POST["sks"];
	$jenis = $_POST["jns"];
	$semester = $_POST["smt"];
	//$uploadOk=1;

	//membuat query
	$sql = "UPDATE matkul SET namamatkul='".$namamatkul."', sks='".$sks."', jns='".$jenis."', smt='".$semester."' WHERE idmatkul='".$idmatkul."'";
	mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	header("location:updateMatkul.php");
?>