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
			
				$num = isset($_GET["num"])? $_GET["num"] : 1;
				$ini = 1;
				
				echo "<h2>Mostrando a tabuada do $num</h2>";
				
				do{
				
					echo "$num X $ini = " . $num * $ini . "<br/>";
					
					$ini++;
					
				}while($ini <= 10);
				
			?>
		</div>
	</body>
</html>
 