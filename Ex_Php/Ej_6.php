<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_6</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<form name='captura' action='' method='POST' onSubmit=''>
				<input name='camp1' placeholder='Numero 1' type='text'/>
				<input name='camp2' placeholder='Numero 2' type='text'/>
				<input type='submit' value='Enviar'/></br>
			</form>
			<?php
				if(isset($_POST['camp1']) && isset($_POST['camp2']) !=Null){
					$Nm=$_POST['camp1'];
					$Num=$_POST['camp2'];
					$Res;

					$Res=$Nm%$Num;
					
					echo 'Numeros por defecto en el programa: </br>';
					echo '<b>'.$Nm.'</b> y <b>'.$Num.'</b></br>';

					if($Res==0){
						print_r('</br>El numero: <b>'.$Nm.'</b> si es multiplo de: <b>'.$Num.'</b>');
					}else{
						print_r('</br>El numero: <b>'.$Nm.'</b> no es multiplo de: <b>'.$Num.'</b>');
					}
				}else{
					echo 'Error, Llene los campos.';
				}
			?>
		</div>
	</body>
</html>