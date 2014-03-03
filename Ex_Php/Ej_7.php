<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_7</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<form name='captura' action='' method='POST' onSubmit=''>
				<input name='camp1' placeholder='Cadena 1' type='text'/>
				<input name='camp2' placeholder='Cadena 2' type='text'/>
				<input type='submit' value='Enviar'/>
				<input type='reset' value='Limpiar'/></br>
			</form>
			<?php
				if(isset($_POST['camp1']) && isset($_POST['camp2']) !=Null){
					echo '<meta charset="utf-8"/>';

					$Cs1=$_POST['camp1'];
					$Cs2=$_POST['camp2'];

					print_r('El tamaño de la primera cadena es: <b>'.strlen($Cs1).'</b></br>');
					print_r('el tamaño de la segunda cadena es: <b>'.strlen($Cs2).'</b></br>');

					echo '</br><div style="border:1px dotted; width:10%"><b>'.$Cs1.' '.$Cs2.'</b></div>';
				}else{
					echo 'Error, Llene los campos.';
				}
			?>
		</div>
	</body>
</html>