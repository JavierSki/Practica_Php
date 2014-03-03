<?php
$n= rand (1,100);
	for($i=0; $i<$n; $i++){
		$vector [$i]= rand (1,100);
	}
for ($i=0; $i<$n; $i++){
	for ($j=$i; $j<$n; $j++){
		if ($vector [$i] > $vector [$j]){
			$mayor= $vector [$i];
			}
		}
	}
print "el numero mayor es: ".$mayor;
?>