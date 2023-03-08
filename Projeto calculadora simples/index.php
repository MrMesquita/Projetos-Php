<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculadora</title>
</head>
<body>

	<?php
//		$num1 = 0;
//		$num2 = 0;
//		$result= '0';
	?>  

	<div class="logo"></div>
	<form class="formulario">
		<style type="text/css" rel="stylesheet">

			html{
				background-color: #28282d;
			}

			body{
				width: 50%;
				margin: 0 auto;
			}
			.logo{
				width: 100%;
				height: 200px;
				margin: 0 auto;
			}
			.formulario{
				width: 380px;
				height: 350px;
				margin: 0 auto;
				background-color:#2f2f38;
				border: 4px solid #2f2f38;
				border-radius: 10px;
			}
			.caixas{
				width: 100%;
				height: 80px;
				margin-top:40px;
				box-sizing: border-box;
				display: flex;
				flex-direction: row;
				align-items: center;
			}
			.resultado{
				width: 20%;
				height: 80px;
				border: 2px solid white;
				border-radius:5px;
				background-color: white;
				font-size: 24px;
				text-align: center;
			}
			input[type=number]{
				width: 20%;
				height: 80px;
				margin-left: 12px;
				border: 0.1px;
				border-radius:5px;
				font-size: 24px;
				text-align: center;
			}
			input[type=submit]{
				padding: 30px;
				margin: 5px;
				border: 0.1px;
				border-radius:5px;
				font-size: 22px;
			}
			.operacoes-pai{
				width: 50%;
				margin: 0 auto;

			}
			.operacoes-filho{
				padding: 10px;
				display: flex;
				flex-wrap: wrap;
				margin: 0 auto;
			}

			.caixas > h1{
				width: 20%;
				margin-left: 12px;
				margin-right: 12px;
				text-align: center;
				font-size:40px;
			}
		</style>
		<div class="caixas">
			<input type="number" name="num1" required >
			<input type="number" name="num2" required >
			<h1>=</h1>

			<div class="resultado">
				<?php
					if(isset($_GET['plus'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						$result = $num1 + $num2;
						echo '<br/>';
						echo $result;
					}
					if(isset($_GET['minus'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						$result = $num1 - $num2;
						echo '<br/>';
						echo $result;
					}
					if(isset($_GET['times'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						$result = $num1 * $num2;
						echo '<br/>';
						echo $result;
					}
					if(isset($_GET['dividedby'])){
						$num1 = $_GET['num1'];
						$num2 = $_GET['num2'];
						if($num1 == 0 && $num2 == 0){						
							echo "<script>alert('Resultado Indefinido');</script>";
						}else{
							$result = $num1 / $num2;
							echo '<br/>';
							echo $result;	
						}
					}
				?>
			</div>
		</div>
			<div class="operacoes-pai">
				<div class="operacoes-filho">
					<input type="submit" name="plus" value="+">
					<input type="submit" name="minus" value="-">
					<input type="submit" name="times" value="x">
					<input type="submit" name="dividedby" value=":">
				</div>
			</div>

	</form>
</body>
</html>







<!-- 



			IGNORA O STYLE NO MEIO DO HTML, DEU PREGUIÇA DE SEPARAR ENT VAI FICAR ASSIM MSM.



-->