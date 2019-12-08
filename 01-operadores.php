<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 01 - Aula 06</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$preco = $_GET["p"];
				echo "O preço do produto é R$ $preco";
				echo "<br>";
				echo "O novo preço com 10% de aumento será R$ ". number_format($preco * 1.1, 2, ",", ".");
				echo "<br>";
				echo "O novo preço com 10% de desconto será R$ ". number_format($preco * 0.9, 2, ",", ".");
			?>
		</div>
	</body>
</html>