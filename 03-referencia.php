<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 03 - Aula 06</title>
		<meta charset="UTF-8"/>
		<link rel="Stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$a = 3;
				$b = &$a;
				$b += 5;
				
				echo "A variavel A vale $a";
				echo "<br>";
				echo "A variavel B vale $b";
			?>
		</div>
	</body>
</html>