<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik:: KRS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
</head>
<body>
	<?php
	require "fungsi.php";
	require "head.html";
	$nim=$_GET['nim'];
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">KRS</h2>	
		<div class="row">
			<?php
			$sql="select * from mhs where nim = '$nim'";
			$qry=mysqli_query($koneksi,$sql);
			$n = 0;
			$row=mysqli_fetch_array($qry);
			?>
		<div class="col-sm-3 text-center">
			<img class="rounded img-thumbnail"src="<?php echo $row["foto"]?>">
		</div>
		<div class="col-sm-9">
			<form enctype="multipart/form-data" method="post" action="sv_editKrs.php">
				<div class="form-group">
					<label for="nim">NIM:</label>
					<input class="form-control" type="text" name="nim" id="nim" value="<?php echo $row['nim']?>" readonly>
				</div>
				<div class="form-group">
					<label for="nama">Nama:</label>
					<input class="form-control" type="text" name="nama" id="nama" value="<?php echo $row['nama']?>" readonly>
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input class="form-control" type="email" name="email" id="email" value="<?php echo $row['email']?>" readonly>
				</div>				
			</form>
	<!-- <div class="text-center"><a href="prnKrsPdf.php"><span class="fas fa-print">&nbsp;Print</span></a></div> -->
		</div>
        <table class="table table-hover">
	<thead class="thead-light">
	<tr>
		<th>No</th>
		<th>ID KRS</th>
		<th>Tahun Akademik</th>
		<th>Matkul</th>
		<th>Nilai</th>
		<th>Dosen</th>
		<th>Hari</th>
		<th>Waktu</th>
		<th>Total SKS</th>
	</tr>
	</thead>
	<tbody>
	<?php
	//jika data tidak ada
        $sql2 = "select krs.*,matkul.namamatkul,dosen.namadosen from krs,matkul,dosen where krs.idMatkul=matkul.idmatkul and krs.nppDos = dosen.npp and krs.nim = '$nim'";
        $kq = mysqli_query($koneksi,$sql2);
        $no = 1;
		while($row=mysqli_fetch_assoc($kq)){
			?>	
			<tr>
				<td><?php echo $no?></td>
				<td><?php echo $row["idKrs"]?></td>
				<td><?php echo $row["thAkd"]?></td>
				<td><?php echo $row["namamatkul"]?></td>
				<td><?php echo $row["nilai"]?></td>
				<td><?php echo $row["namadosen"]?></td>
				<td><?php echo $row["hari"]?></td>
				<td><?php echo $row["waktu"]?></td>
				<td><?php echo $row["totalsks"]?></td>
			</tr>
			<?php 
			$no++;
		}
	?>
	</tbody>
	</table>
		</div>
	</div>
	<script>
		$('#submit').on('click',function(){
			var id 		= $('#id').val();
			var nama	= $('#nama').val();
			var email 	= $('#email').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editMhs.php",
				data	: {id:id, nama:nama, email:email}
			});
		});
	</script>
</body>
</html>