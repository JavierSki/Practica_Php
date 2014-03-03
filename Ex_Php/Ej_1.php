<!DOCTYPE html>
<html lang='es'>
	<head>
		<title>Ejercicio_1</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<div align='center'>
			<form name='captura' action='' method='POST' onSubmit=''>
				<input name='camp1' placeholder='Base' type='text'/>
				<input name='camp2' placeholder='Altura' type='text'/>
				<input type='submit' value='Enviar'></br>
			</form>
			<?php
				if(isset($_POST['camp1']) && ($_POST['camp2']) !=Null){
					$Bs=$_POST['camp1'];
					$Alt=$_POST['camp2'];
					$Res=$Bs*$Alt;

					print_r('</br>El area del rectangulo es: <b>'.$Res.'</b>.');
				}else{
					echo 'Error, Complete los Campos';
				}
			?>
		</div>
	</body>
</html>
