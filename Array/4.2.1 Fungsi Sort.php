<!DOCTYPE html>
<html>
<body>

<?php
$ar_nama = ["s"=>"Satria","b"=>"Bagus","a"=>"Akum","k"=>"Kuncoro" ];

echo '<ol>';

foreach($ar_nama as $k =>$v)
{
echo '<li>'.$k.' - ' . $v .'</li>';
}

echo '</ol>';
sort($ar_nama);
echo '<hr/>';

echo '<ol>';

foreach($ar_nama as $k =>$v)
{
echo '<li>'.$k.' - ' . $v .'</li>';
}

echo '</ol>';
?> 

</body>
</html>
