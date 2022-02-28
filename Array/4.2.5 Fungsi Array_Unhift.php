<!DOCTYPE html>
<html>
<body>

<?php

	$nama = ['Satria', 'Bagus', 'Trikuncoro', 'Akum'];
	array_unshift($nama, 'samsidi', 'butet');
	foreach($nama as $orang) {
		echo $orang . '<br/>';
	}
    
?>
</body>
</html>