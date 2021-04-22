<table width="200" border="1">
    <tr>
		<td>NIM</td>
        <td>Nama Mhs</td>
		<td>Tanggal Lahir</td>
		<td>Tempat Lahir</td>
    </tr>
<?php
//menghitung jumlah data
$file = "datamahasiswa.dat";
$baris = count(file($file));
echo "Jumlah data:", $baris;

$file_handle = fopen("datamahasiswa.dat", "r+");

while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $parts = explode('|', $line_of_text);
	
    echo "<tr><td>$parts[0]</td>
	<td>$parts[1]</td>
	<td>$parts[2]</td>
	<td>$parts[3]</td>
	</tr>";
}
fclose($file_handle);
?>
