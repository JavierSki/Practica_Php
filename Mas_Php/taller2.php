<?php
echo "<table>";
$z=3;
	for($a=0; $a<4; $a++){
		echo "<tr>";
		for($b=0; $b<4; $b++){
			print "<td>".$matriz[$a][$b]= "La matriz en la posicion ".$a." - ".$b." es = ".$z."</td>";
			$z++;
		}
		echo "</tr>";
	}
echo "</table>";
?>