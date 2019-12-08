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
				$es = isset($_GET["es"])? $_GET["es"] : null;

				switch($es){
					
					case "sp":
					case "mg":
					case "rj":
					case "es":
						
						echo "Você mora na Região Sudeste";
						break;
						
					case "pr":
					case "sc":
					case "rs":
					
						echo "Você mora na Região Sul";
						break;
						
					case "ms":
					case "mt":
					case "go":
					case "df":
					
						echo "Você mora na Região Centro-Oeste";
						break;
						
					case "ac":
					case "ro":
					case "rr":
					case "pa":
					case "am":
					case "to":
					case "am":
					
						echo "Você mora na Região Norte";
						break;
						
					case "ba":
					case "pi":
					case "se":
					case "ma":
					case "ce":
					case "rn":
					case "pb":
					case "pe":
					case "al";
					
						echo "Você mora na Região Nordeste";
						break;
						
					default:
					
						echo "Entrada Inválida";					
				}
			?>
			
			<br/>
			<a href="javascript:history.go(-1)" class="botao">Voltar</a>
		</div>
	</body>
</html>
 