<!DOCTYPE html>
<html>
	<head>
		<title>Funções Aritméticas em PHP</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<style>
			h2{
				font: 15pt Arial;
				color: #171559;
				font-weight: bold;
			}
		
		</style>
	</head>
	<body>
		<div>
			<?php
				$v1 = $_GET["x"];
				$v2 = $_GET["y"];
				
				echo "<h2>Valores Recebidos: $v1 e $v2</h2>";
				echo "O valor absoluto de $v2 é ". abs($v2);
				echo "<br>";
				echo "O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
				echo "<br>";
				echo "A raiz de $v1 é ". sqrt($v1);
				echo "<br>";
				echo "O valor de $v2 arredondado é ". round($v2); // ceil floor -- Arredondar pra cima ou para baixo
				echo "<br>";
				echo "A parte inteira de $v2 é ". intval($v2);
				echo "<br>";
				echo "O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");
				echo "<br>";
				echo 3.2;
			?>
		</div>
	</body>
</html>