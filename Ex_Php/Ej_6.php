<?php

	$Nm=6;
	$Num=2;
	$Res;

	$Res=$Nm%$Num;
	
	echo 'Numeros por defecto en el programa: </br>';
	echo '<b>'.$Nm.'</b> y <b>'.$Num.'</b></br>';

	if($Res==0){
		print_r('</br>El numero: <b>'.$Nm.'</b> si es multiplo de: <b>'.$Num.'</b>');
	}else{
		print_r('</br>El numero: <b>'.$Nm.'</b> no es multiplo de: <b>'.$Num.'</b>');
	}

	
?>