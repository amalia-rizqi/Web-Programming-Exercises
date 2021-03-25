<?php
    $baris = 4;
    $kolom = 5;
	$no = 1;

    echo "<table border=\"1;\">";
    for ($i=1; $i <= $baris ; $i++) { 
        echo "<tr>";
        for ($j=1; $j <=$kolom ; $j++) { 
			if ($no % 2 ==0){
				echo "<td bgcolor=\"#ff0000;\">";
				echo $no++;
				echo "</td>";
			}else{
				echo "<td>";
				echo $no++;
				echo "</td>";
			} 
        }echo "</tr>";
    }
    echo "</table>";
?>