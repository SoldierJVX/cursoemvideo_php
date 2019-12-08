<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Exercicio 02 - Aula 09</title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="_css/estilo.css"/>
	</head>
	<body>
		<div>
			<?php
				
				$ano = isset($_GET["ano"])? $_GET["ano"] : "Ano não informado";
				$i = date("Y") - $ano;

				echo "Você nasceu em $ano e terá $i anos";
				echo "<br/>";
				
				if($i < 16){
					
					$tipoVoto = "não vota";
					
				}else if(($i >= 16 && $i < 18) || ($i > 65)){
						
					$tipoVoto = "voto opcional";
						
				}else{
						
					$tipoVoto = "voto obrigatório";
						
				}

				echo "Para essa idade, $tipoVoto";
				
			?>
		</div>
	</body>
</html>