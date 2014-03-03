<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_4</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<?php

				$V1=0;
				$V2=0;
				$CV1=0;
				$CV2=0;

				$V1=$V2=5;
				$CV1=$V1++;
				$CV2=$CV1=++$V2;
				
				#echo $V1.$V2.$CV1.$CV2;
				echo 'Tercer valor: <b>'.$CV1.'</b></br>';
				print_r('Cuarto valor: <b>'.$CV2.'</b>');

			?>
		</div>
	</body>
</html>