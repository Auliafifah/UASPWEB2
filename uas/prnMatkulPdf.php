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
	<h1>Daftar Mata Kuliah<br>
	<sub>Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>ID Mata Kuliah</th>
		<th>Nama Mata Kuliah</th>
		<th>SKS</th>
		<th>Jenis</th>
		<th>Semester</th>
	</tr>
<?php

$sql="select * from matkul";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	echo "<tr>";
	echo "<td>".$no."</td>";
	//echo "<td>".$row['no']."</td>";
	echo "<td>".$row['idmatkul']."</td>";
	echo "<td>".$row['namamatkul']."</td>";
	echo "<td>".$row['sks']."</td>";
	echo "<td>".$row['jns']."</td>";
	echo "<td>".$row['smt']."</td>";
}
// ?>
	
		<td><?php$no++;?></td>
		<td><?php$row['idmatkul'];?></td>
		<td><?php$row['namamatkul'];?></td>
		<td><?php$row['sks'];?></td>			
		<td><?php$row['jns'];?></td>
		<td><?php$row['smt'];?></td>			
<!-- <?php
?> -->
</table>

	<script>
        window.print();
    </script>
</html>