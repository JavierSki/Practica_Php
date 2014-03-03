<html lang='es'>
<head>
	<title>Ejercicio_2</title>
	<meta charset='utf-8'/>
</head>
<body>
	<div align='center'>	
		<form name='captura' action='' method='POST' onSubmit=''>
			<input name='campo' placeholder='Dato' type='text'/>
			<input type='submit' value='Enviar'></br>
		</form>
		<?php
			if(isset($_POST['campo'])!=Null){
				$Hr=$_POST['campo'];
				$Min=60;
				$Seg=60;
				$Ms=1000;
				$Op;
				$Resp;

				echo '</br>La Hora asignada es: <b>'.$Hr.'</b>';

				$Resp=$Hr*$Min/1;
				print_r('</br>Resultado en mìnutos es: <b>'.$Resp.'mins</b></br>');
				$Min*=$Hr/1;
				$Resp=$Min*$Seg/1;
				print_r('Resultado en segundos es: <b>'.$Resp.'segs</b></br>');
				$Min*=$Hr/1;
				$Seg*=$Min/1;
				$Resp=$Ms*$Seg/1;
				print_r('Resultado en milisegundos es: <b>'.$Resp.'milisegs</b></br>');
			}else{
				echo 'Error, Esto es erroneo!!!';
			}
		?>
	</div>
</body>
</html>
