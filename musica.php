<?php 
	$arq = fopen('musica.txt', 'r');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Músicas</title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Indie+Flower|PT+Serif');
		.texto{
			text-align: left;
			margin-left: 20px;
		}

		.texto h2{
			color: red;
			font-family: 'PT Serif', serif;
		}

		.texto p{
			margin-left:40px;
			color: green;
			font-family: 'Indie Flower', cursive;
			font-size: 30px;
		}
		.video{
			width: auto;
			padding: 30px;
			border: 1px solid black;
			border-radius: 10px;
			margin: 0 auto;
			margin-top: 20px;
		}
		body{
			background: url(http://images.cgmagonline.com/2016/04/party-hard-workshop-review-4.jpg);
			background-size: 100% 100%;
			background-repeat: no-repeat;
		}
		#corpo{
			margin: 0 auto;
			text-align: center;
			background: rgba(255,255,255,.6);
			width: 70%;
			border-radius: 40px;
			margin-top: 200px;
			padding: 40px;
		}

	</style>
</head>
<body>
	<div id="corpo">
		<?php  
			while (!feof($arq)) {
				$linha = fgets($arq);
				echo $linha;
			}
		?>

	</div>

</body>
</html>