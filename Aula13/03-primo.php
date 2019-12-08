<!DOCTYPE html>
<html lang="pt-br">
	<head>
	  <link rel="stylesheet" href="_css/estilo.css"/>
	  <meta charset="UTF-8"/>
	  <title>Curso de PHP - CursoemVideo.com</title>
	</head>
	<body>
		<div>
			<?php
			
				$num = isset($_GET["num"])? $_GET["num"] : 1;
				
				echo "Analisando o Número 5 ...";
				echo "<br/>";
				
				$div = 0;
				
				echo "Valores múltiplos: ";
				
				for($i = 1; $i <= $num; $i++){
					
					if($num % $i == 0){
						
						$div++;
						echo "$i ";
						
					}
					
				}
				echo "<br/>";
				
				echo "Total de multiplos: $div";
				echo "<br/>";
				
				if($div == 2){
					
					echo "Resultado: $num É PRIMO!";
					echo "<br/>";
					
				}else{
					
					echo "Resultado: $num Não é PRIMO!";
					echo "<br/>";
					
				}
			
			?>
			<a href="javascript:history.go(-1)">Voltar</a>
		</div>
	</body>
</html>
 