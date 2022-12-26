<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Edit Data Kuliah Tawar</title>
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
		$sql = "SELECT * FROM kultawar WHERE idkultawar='$id'";
		$query = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_assoc($query);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">EDIT DATA KULIAH TAWAR</h2>	
		<div class="row">
			<div class="col-sm-12">
				<form enctype="multipart/form-data" method="post" action="sv_editTawar.php">
					<div class="form-group">
						<label for="idkultawar">ID Kuliah Tawar:</label>
						<input class="form-control" type="number" name="idkultawar" id="idkultawar" value="<?php echo $row['idkultawar']?>">
					</div>

					<div class="form-group">
						<label for="idmatkul">ID Matkul:</label>
						<input class="form-control" type="text" name="idmatkul" id="idmatkul" value="<?php echo $row['idmatkul']?>">
					</div>
					<div class="form-group">
						<label for="npp">NPP:</label>
						<input class="form-control" type="text" name="npp" id="npp" value="<?php echo $row['npp']?>">
					</div>
					<div class="form-group">
						<label for="klp">Kelompok:</label>
						<input class="form-control" type="text" name="klp" id="klp" value="<?php echo $row['klp']?>">
					</div>	
					<div class="form-group">
						<label for="hari">Hari:</label>
						<input class="form-control" type="text" name="hari" id="hari" value="<?php echo $row['hari']?>">
					</div>
					<div class="form-group">
						<label for="jamkul">Jam Kuliah:</label>
						<input class="form-control" type="text" name="jamkul" id="jamkul" value="<?php echo $row['jamkul']?>">
					</div>
					<div class="form-group">
						<label for="ruang">Ruangan:</label>
						<input class="form-control" type="text" name="ruang" id="ruang" value="<?php echo $row['ruang']?>">
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
			var idkultawar 		= $('#idkultawar').val();
			var idmatkul 		= $('#idmatkul').val();
			var npp				= $('#npp').val();
			var klp 			= $('#klp').val();
			var hari 			= $('#hari').val();
			var jamkul 			= $('#jamkul').val();
			var ruang 			= $('#ruang').val();
			$.ajax({
				method	: "POST",
				url		: "sv_editTawar.php",
				data	: {id:id, idkultawar:idkultawar, idmatkul:idmatkul, npp:npp, klp:klp, hari:hari, jamkul:jamkul, ruang:ruang}
			});
		});
	</script>
</body>
</html>