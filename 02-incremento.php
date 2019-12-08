<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 02 - Aula 06</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$atual = $_GET["aa"];
				echo "O ano atual é $atual";
				echo "<br>";
				echo "O ano anterior é ". --$atual;
			?>
		</div>
	</body>
</html>