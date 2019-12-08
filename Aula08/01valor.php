<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercicio 01 - Aula 08</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$valor = $_GET["v"];
				echo "O valor enviado foi $valor";
				
				$rq = sqrt($valor);
				
				echo "<br/>";
				
				echo "A raiz de $valor é igual a " . number_format($rq,2);
			?>
			<br/>
			<a href="01exercicio.html">Voltar</a>
		</div>
	</body>
</html>