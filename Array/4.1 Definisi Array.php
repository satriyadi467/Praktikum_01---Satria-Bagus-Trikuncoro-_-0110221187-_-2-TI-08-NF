<?php 

$ar_nama = ["Satria", "Bagus","Akum","Samsidi" ];

// cetak nama ke index ke 2
echo $ar_nama[2];

// cetak jumlah nama
echo '<br/>Jumlah Nama ' . count($ar_nama);

// cetak seluruh nama 
echo '<ol>';
foreach($ar_nama as $nama){
echo '<li>'. $nama .'</li>';
}

echo '</ol>';

// tambahkan nama 
$ar_nama[]="Kuncoro";

// hapus nama index ke 1
unset($ar_nama[1]);

// ubah nama index ke 2 menjadi Akum
$ar_nama[2]="Akum";

// cetak seluruh nama dengan index nya
echo '<ul>';
foreach($ar_nama as $k => $v){
echo '<li> nama index - ' . $k .' adalah '. $v .'</li>';
}
echo '</ul>';