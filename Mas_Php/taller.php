<html>
<head><title>taller</title></head>
<body>
<?php
$j=0;
	for($a=0; $a<3; $a++){
	$j++;
		for($b=0; $b<3; $b++){
			$matriz[$b][$a]= $a + $b + $j;
		}
	}
	echo "<table border=1>";
	for($a=0; $a<3; $a++){
		echo "<tr>";
		for($b=0; $b<3; $b++){
			echo "<td>".$matriz[$a][$b]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>
</body>
</html>