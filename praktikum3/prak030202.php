<?php

function hitungDenda($tglHarusKembali, $tglKembali){
	//menghitung selisih hari
	$pecah1 = explode("-", $tglHarusKembali);
	$date1 = $pecah1[2];
	$month1 = $pecah1[1];
	$year1 = $pecah1[0];
	 
	$pecah2 = explode("-", $tglKembali);
	$date2 = $pecah2[2];
	$month2 = $pecah2[1];
	$year2 =  $pecah2[0];
	 
	$jd1 = GregorianToJD($month1, $date1, $year1);
	$jd2 = GregorianToJD($month2, $date2, $year2);
	 
	$selisih = $jd2 - $jd1;
	
	//menghitung jumlah denda
	$besarDenda = 3000;
	
	$denda = $selisih*$besarDenda;
	
	echo "Besarnya denda adalah: Rp.", $denda;
}

hitungDenda("2021-01-03", "2021-01-05");
?>