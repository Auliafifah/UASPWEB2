
<?php
//memanggil file pustaka fungsi
require "fungsi.php";
$nim = $_GET['nim'];

//memindahkan data kiriman dari form ke var biasa
$twr=explode('-',$_POST["matkul"]);
$thn=$_POST["thAkd"];
$nilai=$_POST["nilai"];
$total=$_POST['totalsks'];
$twr = "select idmatkul,npp,hari,jamkul from kultawar where idmatkul = '$twr[1]'
and klp = '$twr[0]'";
$twrm = mysqli_query($koneksi,$twr);
$twrf = mysqli_fetch_assoc($twrm);
$addkrs = "insert into krs(thAkd,nim,idMatkul,nilai,nppDos,hari,waktu,totalsks) values
('$thn','$nim','".$twrf['idmatkul']."','$nilai','".$twrf['npp']."','".$twrf['hari']."',
'".$twrf['jamkul']."','$total')";
mysqli_query($koneksi,$addkrs);
header("location:tampilKrs.php?nim=$nim");


?>