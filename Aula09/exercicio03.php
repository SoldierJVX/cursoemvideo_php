<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercicio 03 - Aula 09</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
		<style>
			span.cor{
				
				color: red;
			
			}
		</style>
	</head>
	<body>
		<div>
			<?php
				
				$n1 = isset($_GET["n1"])? $_GET["n1"] : 0;
				$n2 = isset($_GET["n2"])? $_GET["n2"] : 0;
				$media = ($n1 + $n2) / 2;
				$media = number_format($media,1);
				
				echo "A média entre <span class='cor'>$n1</span> e <span class='cor'>$n2</span> é igual a <span class='cor'>$media</span>";
				echo "<br/>";
				echo "Situação do Aluno: ";
				
				if($media < 5){
					
					echo "<span class='cor'>REPROVADO</span>";
					
				}else if ($media >= 5 && $media < 7){
					
					echo "<span class='cor'>RECUPERAÇÃO</span>";
					
				}else{
					
					echo "<span class='cor'>APROVADO</span>";
					
				}
				
			?>
		</div>
	</body>
</html>