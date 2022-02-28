<!DOCTYPE html>
<html>
<body>

<?php
	$nama = ['Satria', 'Bagus', 'Trikuncoro', 'Akum'];
	array_shift($nama);
	foreach($nama as $orang) {
		echo $orang . '<br/>';
	}
?>
</body>
</html>