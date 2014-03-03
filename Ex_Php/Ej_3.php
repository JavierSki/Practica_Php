<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_3</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<?php

				$A=7;
				$B;
				$C;

				$B=$A;
				$A*=2;

				for($I=0;$I<=7;$I++){
					$B++;
					$A--;
					$C=$A+$B;
				}

				print_r('Resultado es: <b>'.$C.'</b>');
			?>
		</div>
	</body>
</html>