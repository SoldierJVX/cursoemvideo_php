<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <link rel="stylesheet" href="_css/estilo.css"/>
	  <meta charset="UTF-8"/>
	  <title>Curso de PHP - CursoemVideo.com</title>
	</head>
	<body>
		<div>
			<?php
			
				function test(&$x){
					
					$x += 2;
					echo "<p>O valor de X é $x</p>";
					
				}
				
				$a = 3;
				test($a);
				echo "<p>O valor de A é $a</p>";
				
			?>
		</div>
	</body>
</html>
 