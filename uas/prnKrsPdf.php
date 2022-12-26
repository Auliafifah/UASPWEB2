<?php

require "fungsi.php";
?>
	<!DOCTYPE html>
	<html>
	<head>
	    <title>Kartu Rencana Study</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylepdf.css">
	</head>
	<body>
	<h1>Kartu Rencana Study<br>
	<sub>Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>ID KRS</th>
		<th>Thn Akd</th>
		<th>Id Matkul</th>
		<th>Nilai</th>
		<th>NPP Dosen</th>
		<th>Hari</th>
		<th>Waktu</th>
		<th>total sks</th>
	</tr>
<?php
// if(isset($_GET['nim'])){
// 	$id_karyawan    =$_GET['nim'];
// }
// else {
// 	die ("Error. No ID Selected!");    
// }
// include "fungsi.php";
// $query    =mysqli_query($conn, "SELECT * FROM krs WHERE nim='$nim'");
// $result    =mysqli_fetch_array($query);
$sql="select * from krs";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	echo "<tr>";
	echo "<td>".$row['idKrs']."</td>"; 							
	echo "<td>".$row['thAkd']."</td>";
	echo "<td>".$row['idMatkul']."</td>";
	echo "<td>".$row['nilai']."</td>";
	echo "<td>".$row['nppDos']."</td>";
	echo "<td>".$row['hari']."</td>";
	echo "<td>".$row['waktu']."</td>";
	echo "<td>".$row['totalsks']."</td>";
}
?>
</table>

	<script>
        window.print();
    </script>
</html>