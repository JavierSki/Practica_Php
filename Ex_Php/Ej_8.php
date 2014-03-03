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
				<input type='submit' value='Enviar'/></br>
			</form>
			<?php
				if(isset($_POST['camp1']) && isset($_POST['camp2']) !=Null){
					echo '<meta charset="utf-8"/>';
				
					$Cd1=$_POST['camp1'];
					$Cd2=$_POST['camp2'];

					#print_r('<div align=\'center\'>=============================</div></br>');
					echo '</br><div style="border:1px dotted; width:10%" align="center">'.$Cd1.'</br>'.$Cd2.'</div>';
					#print_r('<div align=\'center\'>=============================</div>');
				}else{
					echo 'Error, Llene los campos.';
				}
			?>
		</div>
	</body>
</html>