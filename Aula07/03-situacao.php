<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 03 - Aula 07</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$nota1 = $_GET["n1"];
				$nota2 = $_GET["n2"];
				
				$m = ($nota1 + $nota2) / 2;
				
				echo "A media entre $nota1 e $nota2 é $m";
				
				echo "<br/>";
				
				$sit = ($m < 6) ? "REPROVADO" : "APROVADO";
				
				echo "A situação do aluno é $sit";
				
				echo "<br/><br/>";
				
				echo "Usando Concatenação";
				
				echo "<br/>";
				
				echo "A situação do aluno é " . (($m < 6) ? "REPROVADO" : "APROVADO");
			?>
		</div>
	</body>
</html>