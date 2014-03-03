<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_5</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<form name='captura' action='' method='POST' onSubmit=''>
				<input name='campo' placeholder='Numero' type='text'/>
				<input type='submit' value='Enviar'></br>
			</form>
			<?php
				echo '<meta charset="utf-8"/>';

				if (isset($_POST['campo']) !=Null) {
					$Vr=$_POST['campo'];

					print_r('El valor en el campo Char es: <b>'.$Vr.'</b></br>');

					print_r('Su resultado de Incremento es: <b>'.chr(++$Vr).'='.$Vr.'</b></br>');
					$Vr--;
					print_r('Su resultado de Decremento es: <b>'.chr(--$Vr).'='.$Vr.'</b></br>');
				}else{
					echo 'Error, Llene el campo!';
				}
			?>
		</div>
	</body>
</html>