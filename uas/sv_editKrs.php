<?php
	//memanggil file pustaka fungsi
	require "fungsi.php";

	//memindahkan data kiriman dari form ke var biasa
	//$id=$_POST["id"];
	$id = $_POST["id"];
	$nim = $_POST["nim"];
	$twr=explode('-',$_POST["matkul"]);
	$thn=$_POST["thAkd"];
	$nilai=$_POST["nilai"];
	$total=$_POST['totalsks'];
	$twr = "select idmatkul,npp,hari,jamkul from kultawar where idmatkul = '$twr[1]'
	and klp = '$twr[0]'";	
	$twrm = mysqli_query($koneksi,$twr);
	$twrf = mysqli_fetch_assoc($twrm);
	//$uploadOk=1;

	//membuat query
	$sql = "UPDATE krs SET thAkd='".$thn."', nim='".$nim."', idMatkul='".$twrf["idmatkul"]."',nilai='$nilai', nppDos='".$twrf["npp"]."',hari='".$twrf["hari"]."', waktu='".$twrf["jamkul"]."', totalsks='".$total."' WHERE idKrs='".$id."'";
	mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
	header("location:tampilKrs.php?nim=$nim");
?>