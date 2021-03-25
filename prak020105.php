<html>
	<head>Headings</head>
	<body>
	<?php
		$x =0;
		do {
			$x++;
			if ($x % 2 !=0){
				echo "<h$x>Headings $x </h$x>";
			}else{
				echo "<h$x style=\"color:Red;\">Headings $x </h$x>";
			}
		}while ($x <=5);
	?>
	</body>
</html>