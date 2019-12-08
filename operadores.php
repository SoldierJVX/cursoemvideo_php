<!DOCTYPE html>
<html>
	<head>
		<title>Operações Artiméticas</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				
				echo "<h2>Valores Recebidos: $n1 e $n2</h2>";
				
				$m = ($n1 + $n2) / 2;
				
				
				echo "A soma vale ". ($n1 + $n2);
				echo "<br>";
				echo "A subtração vale ". ($n1 - $n2);
				echo "<br>";
				echo "A multiplicação vale ". ($n1 * $n2);
				echo "<br>";
				echo "A divisão vale ". ($n1 / $n2);
				echo "<br>";
				echo "O modulo vale ". ($n1 % $n2);
				echo "<br>";
				echo "A media é $m";
			?>
		</div>
	</body>
</html>