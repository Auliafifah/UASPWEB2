<?php

require "fungsi.php";
?>



	<!DOCTYPE html>
	<html>
	<head>
	    <title>Sistem Informasi Akademik::Daftar Dosen</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/stylepdf.css">
	</head>
	<body>
	<h1>Daftar Dosen<br>
	<sub>Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>No.</th>
		<th>NPP</th>
		<th>Nama Dosen</th>
		<th>Home Base</th>
	</tr>
<?php

$sql="select * from dosen";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	echo "<tr>";
	echo "<td>".$no."</td>";
	echo "<td>".$row['npp']."</td>";
	echo "<td>".$row['namadosen']."</td>";
	echo "<td>".$row['homebase']."</td>";
}
// ?>
	
		<td><?php$no++;?></td>
		<td><?php$row['npp'];?></td>
		<td><?php$row['namadosen'];?></td>
		<td><?php$row['homebase'];?></td>			
	
<!-- <?php
?> -->
</table>

	<script>
        window.print();
    </script>
</html>



	
		
	
