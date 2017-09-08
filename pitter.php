<?php 
 	$nome = $_POST["nome"];
	$url = substr($_POST["url"], -11);
	$desc = $_POST["desc"];
	$arq = fopen('musica.txt', 'a+');
	$new = '<div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/'.$url .'" frameborder="0" allowfullscreen></iframe><br><div class="texto"><h2>'.$nome.'</h2><br><p>'.$desc.'</p><br></div></div>';
	fwrite($arq, $new);
	fclose($arq);
	echo "Música enviada com sucesso!";
	?>

	<!DOCTYPE html>
	<html>
	<head>
	<meta http-equiv="refresh" content="2; musica.php">

		<title></title>
	</head>
	<body>
		
	</body>
	</html>