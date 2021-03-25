<html>
	<head>Headings</head>
	<body>
	<?php
		for ($x=1; $x <= 6; $x++) { 
			if ($x % 2 ==0){
				echo "<h$x style=\"color:Red;\">Headings $x </h$x>";
			}
			else{
				echo "<h$x>Headings $x </h$x>";
			}
		}
	?>

	</body>
</html>