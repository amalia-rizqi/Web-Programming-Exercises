<?php

//baca kedua bilangan
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];

//proses perhitungan
if(isset(penjumlahan)){
	$hasil = $bil1+$bil2;
}else if(isset(pengurangan)){
	$hasil = $bil1-$bil2;
}else if(isset(perkalian)){
	$hasil = $bil1*$bil2;
}else if(isset(pembagian)){
	$hasil = $bil1/$bil2;
}else if(isset(pangkat)){
	$hasil = $bil1*$bil2;
}

//menampilkan hasil perhitungan
echo"<h2>".$bil1."".$op."".$bil2."=".$hasil."</h2>";
?>