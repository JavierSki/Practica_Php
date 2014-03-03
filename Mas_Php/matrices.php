<?php
	for($f=0;$f<3;$f ++){
		for($c=0;$c<3;$c ++){
			$matriz[$f][$c]= rand(1, 100);
		}
	}
	for($f=0;$f<3;$f++){
		echo "<br/>";
		for($c=0;$c<3;$c++){
			
		}		
		echo "<br/>";
		echo "_________";
		echo "<br/>";
		for ($c=0;$c<3;$c++){
			echo "|".$matriz[$f][$c]."|";
		}
		for ($c=0;$c<3;$c++){
			echo "<br/>";
			echo "______";
		}
	}
?>