<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercicio 01 - Aula 09</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				
				$ano = isset($_GET["ano"])? $_GET["ano"] : "Ano não informado";
				$i = date("Y") - $ano;

				echo "Você nasceu em $ano e terá $i anos";
				
				if($i >= 18){
					
					$v = "já pode votar";
					$d = "já pode dirigir";
					
				}else{
					
					$v = "não pode votar";
					$d = "não pode dirigir";
						
				}
				echo "<br/>";
				echo "Com essa idade você $v e tambem $d";
				
			?>
		</div>
	</body>
</html>