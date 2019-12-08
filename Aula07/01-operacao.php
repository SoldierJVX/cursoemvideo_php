<DOCTYPE html>
<html>
	<head>
		<title>Exercicio 01 - Aula 07</title>
		<meta charset="UTF-8"/>
		<link rel="Stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$tipo = $_GET["op"];
				$n1 = $_GET["a"];
				$n2 = $_GET["b"];
				
				echo "Os valores foram $n1 e $n2";
				echo "<br/>";
				
				$r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
				
				echo "O resultado será $r";
			?>
		</div>
	</body>
</html>