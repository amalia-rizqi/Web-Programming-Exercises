<?php
function buatBintang($n){
	echo "<pre>";
	for ($i=0; $i<$n;$i++){
		for ($j=$n;$j>$i;$j-=1){
			echo"*";
		}
		echo"\n";
	}
	echo"</pre>";
}

buatBintang(4);
buatBintang(5);
?>