<!DOCTYPE html>
<html>
<body>

<?php
	$nama = ['Satria', 'Bagus', 'Trikuncoro', 'Akum'];
	array_pop($nama);
	foreach($nama as $orang) {
		echo $orang . '<br/>';
	}
?>
</body>
</html>