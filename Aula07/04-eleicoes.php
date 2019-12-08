<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 04 - AUla 07</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$ano = $_GET["an"];
				$idade = 2016 - $ano;
				
				echo "Quem nasceu em $ano tem a idade de $idade anos";
				
				echo "<br/>";
				
				$tipo = ($idade >= 18 && $idade <= 64) ? "OBRIGATORIO" : "NÃO OBRIGATÓRIO";
				
				echo "E dessa forma seu voto é $tipo";
				
			?>
		</div>
	</body>
</html>