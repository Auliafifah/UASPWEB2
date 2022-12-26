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
	<h1>Daftar Mahasiswa<br>
	<sub>Universitas Dian Nuswantoro<sub><br>
	<small>Tahun Akademik 2020-2021</small></h1>
	<table>	
	<tr>
		<th>No.</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>
<?php

$sql="select * from mhs";		
$qry = mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
$no=0;
while($row=mysqli_fetch_assoc($qry)){
	$no++;
	echo "<tr>";
	echo "<td>".$no."</td>";
	//echo "<td>".$row['no']."</td>";
	echo "<td>".$row['nim']."</td>";
	echo "<td>".$row['nama']."</td>";
	echo "<td>".$row['email']."</td>";
}
// ?>
	
		<td><?php$no++;?></td>
		<td><?php$row['no'];?></td>
		<td><?php$row['nim'];?></td>
		<td><?php$row['nama'];?></td>			
		<td><?php$row['email'];?></td>
<!-- <?php
?> -->
</table>

	<script>
        window.print();
    </script>
</html>