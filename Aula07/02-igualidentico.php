<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 02 - Aula 07</title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$a = 3;
				$b = "3";
				
				$r = ($a == $b) ? "SIM" : "NÃO";
				
				echo "As variaveis A e B são iguais? $r";
				
				echo "<br/>";
				
				$r = ($a === $b) ? "SIM" : "NÃO";
				
				echo "As variaveis A e B são identicas? $r";
			?>
		</div>
	</body>
</html>