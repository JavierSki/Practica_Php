<?php
	$N= rand(1, 100);
	for($I=0;$I<$N;$I++){
		$vector[$I]= rand(1, 100);
	}
	for($P=0;$P<$N;$P++){
		for($J=$P;$J<$N;$J++){
			if($vector[$P] > $vector[$J]){
				$mayor=$vector[$I];
			}
		}
	}
	print_r('El numero mayor es: '.$mayor);
?>