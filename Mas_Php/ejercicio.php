<?php

	$a=rand(0, 100);
	$b=rand(0, 100);

	if($a>$b){
		print "el numero mayor es ".$a."\n"."el numero menor es ".$b;
	}else if($b>$a){
		print "el numero mayor es ".$b."\n"."el numero menor es ".$a;
	}else{
		print "los numeros ".$a." y ".$b." son iguales";
	}

?>