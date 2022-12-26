<?php

require "fungsi.php";
?>



	<!DOCTYPE html>
	<html>
	<head>
	    <title>Sistem Informasi Akademik::Daftar Mahasiswa </title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylepdf.css">
	</head>
	<body>
	<h1>Daftar Kuliah Tawar<br>
	<sub>Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>ID Kuliah Tawar</th>
		<th>ID Mata Kuliah</th>
		<th>NPP</th>
		<th>Kelompok</th>
		<th>Hari</th>
		<th>Jam Kuliah</th>
		<th>Ruangan</th>
	</tr>
<?php

$sql="select * from kultawar";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	echo "<tr>";
	echo "<td>".$no."</td>";
	//echo "<td>".$row['no']."</td>";
	echo "<td>".$row['idkultawar']."</td>";
	echo "<td>".$row['idmatkul']."</td>";
	echo "<td>".$row['npp']."</td>";
	echo "<td>".$row['klp']."</td>";
	echo "<td>".$row['hari']."</td>";
	echo "<td>".$row['jamkul']."</td>";
	echo "<td>".$row['ruang']."</td>";
}
// ?>
	
		<td><?php$no++;?></td>
		<td><?php$row['idkultawar'];?></td>
		<td><?php$row['idmatkul'];?></td>
		<td><?php$row['npp'];?></td>			
		<td><?php$row['klp'];?></td>
		<td><?php$row['hari'];?></td>			
		<td><?php$row['jamkul'];?></td>
		<td><?php$row['ruang'];?></td>
<!-- <?php
?> -->
</table>

	<script>
        window.print();
    </script>
</html>