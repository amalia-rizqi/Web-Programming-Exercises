<?php
$nim = $_POST[’nim’];
$nama = $_POST[‘nama’];
$nama = $_POST[‘tgllhr’];
$nama = $_POST[‘tmptlhr’];

$myFile = “datamhs.txt”;

$fh = fopen($myFile, ‘a’) or die(“can’t open file”);

$stringData = “NIM: “.$nim.” Nama: “.$nama.” 
“Tanggal Lahir: “.$tgllhr.” Tempat Lahir: “.$tmptlhr.”\n”;

fwrite($fh, $stringData);
fclose($fh);
?>