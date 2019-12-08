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
			
				$ini = isset($_GET["inicio"])? $_GET["inicio"] : 0 ;
				$fim = isset($_GET["fim"])? $_GET["fim"] : 0 ; 
				$inc = isset($_GET["inc"])? $_GET["inc"] : 0;

				if($ini < $fim){
					
					$cont = $ini;
					
					while($cont <= $fim){
					
						echo "$cont ";
						$cont += $inc;
					
					}
					
				}else if ($ini > $fim){
					
					$cont = $ini;
					
					while($cont >= $fim){
					
						echo "$cont ";
						$cont -= $inc;
					
					}
					
				}else{
				
					echo "$ini";
				
				}
				
			?>
			<br/>
			<a href="03-parte1.html" class="botao">Voltar</a>
		</div>
	</body>
</html>
 