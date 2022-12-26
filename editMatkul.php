<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Edit Data Matkul</title>
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
		$id = $_GET['kode'];
		$sql = "SELECT * FROM matkul WHERE idmatkul='$id'";
		$query = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_assoc($query);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT DATA MATKUL</h2>	
		<div class="row">
			<div class="col-sm-12">
				<form enctype="multipart/form-data" method="post" action="sv_editMatkul.php">
					<div class="form-group">
						<label for="idmatkul">ID Matkul:</label>
						<input class="form-control" type="text" name="idmatkul" id="idmatkul" value="<?php echo $row['idmatkul']?>" readonly>
					</div>
					<div class="form-group">
						<label for="namamatkul">Nama Matkul:</label>
						<input class="form-control" type="text" name="namamatkul" id="namamatkul" value="<?php echo $row['namamatkul']?>">
					</div>
					<div class="form-group">
						<label for="sks">SKS:</label>
						<input class="form-control" type="number" name="sks" id="sks" value="<?php echo $row['sks']?>">
					</div>	
					<div class="form-group">
						<label for="jns">Jenis:</label>
						<input class="form-control" type="text" name="jns" id="jns" value="<?php echo $row['jns']?>">
					</div>
					<div class="form-group">
						<label for="smt">Semester:</label>
						<input class="form-control" type="number" name="smt" id="smt" value="<?php echo $row['smt']?>">
					</div>
					<div>		
						<button class="btn btn-primary" type="submit" id="submit">Simpan</button>
					</div>
					<input type="hidden" name="id" id="id" value="<?php echo $id?>">
				</form>
		</div>
		</div>
	</div>
	<script>
		$('#submit').on('click',function(){
			var id 				= $('#id').val();
			var idmatkul 		= $('#idmatkul').val();
			var namamatkul		= $('#namamatkul').val();
			var sks 			= $('#sks').val();
			var jns 			= $('#jns').val();
			var smt 			= $('#smt').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editMatkul.php",
				data	: {id:id, idmatkul:idmatkul, namamatkul:namamatkul, sks:sks, jns:jns, smt:smt}
			});
		});
	</script>
</body>
</html>