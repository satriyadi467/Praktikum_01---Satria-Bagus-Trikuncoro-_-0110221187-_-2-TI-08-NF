<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>Array Siswa (Last)</title>
	</head>
    
	<body class="bg-light">
		<?php
			$ns1 = ['id'=>1,'nim'=>'01101','uts'=>70,'uas'=>80,'tugas'=>78];
			$ns2 = ['id'=>2,'nim'=>'01102','uts'=>75,'uas'=>85,'tugas'=>68];
			$ns3 = ['id'=>3,'nim'=>'01103','uts'=>80,'uas'=>90,'tugas'=>78];
			$ns4 = ['id'=>4,'nim'=>'01104','uts'=>90,'uas'=>100,'tugas'=>90];
			
			$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
		?>
		<div class="container-fluid position-absolute top-50 left-50 translate-middle-x translate-middle-y">
			<h3 class="text-center">Daftar Nilai Siswa</h3>
			<table class="table table-dark table-striped table-hover text-center w-50 m-auto shadow">

				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIM</th>
						<th scope="col">UTS</th>
						<th scope="col">UAS</th>
						<th scope="col">Tugas</th>
						<th scope="col">Nilai Akhir</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$nomor = 1;
						foreach($ar_nilai as $ns){
							echo '<tr><th scope="row">'.$nomor.'</th>';
							echo '<td>'.$ns['nim'].'</td>';
							echo '<td>'.$ns['uts'].'</td>';
							echo '<td>'.$ns['uas'].'</td>';
							echo '<td>'.$ns['tugas'].'</td>';
							$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
							echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
							echo '<tr/>';
							$nomor++;
						}
					?>
				</tbody>
                
			</table>
		</div>

		<!-- Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>