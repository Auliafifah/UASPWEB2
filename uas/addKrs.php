<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Akademik::Tambah KRS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>

</head>
<body>
	<?php
	require "head.html";
	include "fungsi.php";
	$nim = $_GET['nim'];
	?>
	<div class="utama">		
		<br><br><br>		
		<h3>TAMBAH KRS</h3>
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>	
		<form method="post" action="sv_addKrs.php?nim=<?php echo $nim?>" enctype="multipart/form-data">
			<div class="form-group">
				<label for="thAkd">Tahun Akademik :</label>
				<input class="form-control" type="number" name="thAkd" id="thAkd">
			</div>
			<div class="form-group">
				<label for="matkul">Mata Kuliah:</label>
			<select class="form-control" name="matkul" id="matkul">
				<?php 
					$twr = "select kultawar.klp,kultawar.idmatkul,matkul.namamatkul from kultawar,matkul
					where kultawar.idmatkul=matkul.idmatkul";
					$twrm = mysqli_query($koneksi,$twr);
					while($row=mysqli_fetch_assoc($twrm)){
				?>
					<option value="<?php echo $row['klp']."-".$row['idmatkul']?>"><?php echo $row['klp']."-".$row['namamatkul']?></option>
				<?php		
					}
				?>
			</select>
			</div>
            <div class="form-group">
				<label for="nilai">Nilai :</label>
				<select class="form-control" name="nilai" id="nilai">
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
				</select>
			</div>
			<div class="form-group">
				<label for="totalsks">Total SKS :</label> 
				<input class="form-control" type="number" name="totalsks" id="totalkrs">
			</div>
			<div>		
				<button type="submit" class="btn btn-primary" value="Simpan">Simpan</button>
			</div>
		</form>
	</div>
	<!--
	<script>
		$(document).ready(function(){
			$('#butsave').on('click',function(){			
				$('#butsave').attr('disabled', 'disabled');
				var nim 	= $('#nim').val();
				var nama	= $('#nama').val();
				var email 	= $('#email').val();
				
				$.ajax({
					type	: "POST",
					url		: "sv_addMhs.php",
					data	: {
								nim:nim,
								nama:nama,
								email:email
							  },
					contentType	:"undefined",					
					success : function(dataResult){						
						alert('success');
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html(dataResult);	
					}	   
				});
			});
		});
	</script>
	-->	
</body>
</html>