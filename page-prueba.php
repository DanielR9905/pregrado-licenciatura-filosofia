<?php
/*
Template Name: plan
*/
 ?>
	<div id="infoRegistro">
		<?php 
			$json=file_get_contents('https://programasacademicos.utp.edu.co/programa-academico/10');
			$array=json_decode($json);
			echo("<pre>");
				var_dump($array);
			echo("</pre>");
		?>
	</div>