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
		$id = $_GET['id'];
		$sql = "SELECT * FROM krs WHERE idkrs='$id'";
		$query = mysqli_query($koneksi,$sql);
		$row = mysqli_fetch_assoc($query);
        $klpq = "select klp from kultawar where npp='".$row['nppDos']."' and idmatkul='".$row['idMatkul']."'";
        $klpm = mysqli_query($koneksi,$klpq);
        $klp = mysqli_fetch_assoc($klpm);
	?>
	<div class="utama">
		<h2 class="mb-3 text-center">Edit Kartu Rencana Study</h2>	
		<div class="row">
			<div class="col-sm-12">
				<form method="post" action="sv_editKrs.php">
                <div class="form-group">
				<label for="thAkd">Tahun Akademik :</label>
				<input class="form-control" type="number" name="thAkd" id="thAkd" value="<?php echo $row['thAkd']?>">
			</div>
            <div class="form-group">
				<label for="totalsks">Total SKS :</label> 
				<input class="form-control" type="number" name="totalsks" value="<?php echo $row['totalsks']?>" id="totalsks">
			</div>
			<div class="form-group">
				<label for="matkul">Mata Kuliah:</label>
			<select class="form-control" name="matkul" id="matkul">
				<?php 
					$twr = "select kultawar.klp,kultawar.idmatkul,matkul.namamatkul from kultawar,matkul
					where kultawar.idmatkul=matkul.idmatkul";
					$twrm = mysqli_query($koneksi,$twr);
					while($rw=mysqli_fetch_assoc($twrm)){
				?>
					<option <?php if($klp['klp'] == $rw['klp']){echo "selected";}?> value="<?php echo $rw['klp']."-".$rw['idmatkul']?>"><?php echo $rw['klp']."-".$rw['namamatkul']?></option>
				<?php		
					}
				?>
			</select>
			</div>
            <div class="form-group">
				<label for="nilai">Nilai :</label>
				<select class="form-control" name="nilai" id="nilai">
					<option <?php if ($row['nilai'] == "A"){ echo "selected";} ?> value="A">A</option>
					<option <?php if ($row['nilai'] == "B"){ echo "selected";} ?> value="B">B</option>
					<option <?php if ($row['nilai'] == "C"){ echo "selected";} ?> value="C">C</option>
					<option <?php if ($row['nilai'] == "D"){ echo "selected";} ?> value="D">D</option>
				</select>
			</div>
			<div class="form-group">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
				<input type="hidden" name="id" id="id" value="<?php echo $id?>">
                <input type="hidden" name="nim" id="nim" value="<?php echo $row['nim']?>">
			</form>
		</div>
		</div>
	</div>
	<script>
		// $('#submit').on('click',function(){
		// 	var id 				= $('#id').val();
		// 	var idkultawar 		= $('#idkultawar').val();
		// 	var idmatkul 		= $('#idmatkul').val();
		// 	var npp				= $('#npp').val();
		// 	var klp 			= $('#klp').val();
		// 	var hari 			= $('#hari').val();
		// 	var jamkul 			= $('#jamkul').val();
		// 	var ruang 			= $('#ruang').val();
		// 	$.ajax({
		// 		method	: "POST",
		// 		url		: "sv_editKrs.php",
		// 		data	: {id:id, idkultawar:idkultawar, idmatkul:idmatkul, npp:npp, klp:klp, hari:hari, jamkul:jamkul, ruang:ruang}
		// 	});
		// });
	</script>
</body>
</html>