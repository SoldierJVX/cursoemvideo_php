<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercicio 02 - Aula 08</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				$nome = isset($_GET["nome"])? $_GET["nome"] : "[Não Informado]";
				$ano = isset($_GET["ano"])? $_GET["ano"] : 0;
				$sexo = isset($_GET["sexo"])? $_GET["sexo"] : "[sem sexo]";
				$idade = date("Y") - $ano;
				
				echo "$nome é $sexo e tem $idade anos.";
			?>
			<br/>
			<a href="02exercicio.html">Voltar</a>
		</div>
	</body>
</html>