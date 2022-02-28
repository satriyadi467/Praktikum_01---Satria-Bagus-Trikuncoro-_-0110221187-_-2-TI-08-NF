<?php

 // definisikan konstansta

define('PHI',3.14);
define('DATABASE_NAME','inventori');
define('DATABASE_SERVER','localhost');

$jari = 25;
$luas = PHI * $jari * $jari;
$keliling = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' = '.$luas;
echo '<br/> Keliling Lingkaran dengan Jari '.$jari.' = '.$keliling;
?>

<hr/>
<br/>
<?php
echo 'Nama databasenya : '.DATABASE_NAME;
echo '<br/> Lokasi databasenya ada di '.DATABASE_SERVER;
?>