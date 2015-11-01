<?php 
	include '../builders/styleBuilder.php';

	if(isset($_POST["select-color"]))
	{
		$color = $_POST["select-color"];

		if($color == "other")
		{
			if(isset($_POST["input-other-color"]))
			{
				$color = $_POST["input-other-color"];
			}
		}

		estilizeAllPages($color);
	}
?>

<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<title>Portal de Notícias</title>
	<link rel="shortcut icon" type="image/png" href="../img/icontitle.png">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard-style.css">
	<link rel="stylesheet" type="text/css" href="../css/identidadevisual-style.css">
</head>
<body>
	<header>
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="../frame/master-page.php"></iframe>
	</header>
	<div class=".row-for-float">
		<div id="menu-dashboard" class="float-left">
			<!--Não alterar nada dentro dessa tag! -->
			<iframe src="../frame/menu-dashboard.php"></iframe>
		</div> <!--Fim menu-dashboard -->

		<div id="container-dashboard" class="float-right">

			<div id="container-nome" class="container-dashboard">
				<div class="header">
					<h2>Manutenção - Nome</h2>
				</div>
				<div class="body">
					TESTE
				</div>
			</div>

			<div id="container-identidade-visual" class="container-dashboard">
				<div class="header">
					<h2>Manutenção - Identidade Visual</h2>
				</div>
				<div class="body">
					<form method="POST" action="" target="_parent">
						<div class="row-for-float">
							<div id="first-container" class="container">
								<label for="default-color">
									<div id="display-default-color" class="display-color"></div>
								</label>
								<input id="default-color" type="radio" name="select-color" value="72b2ee" />
								<label for="default-color">Defalut</label>
							</div>
							<div class="container">
								<label for="red-color">
									<div id="display-red-color" class="display-color"></div>
								</label>
								<input id="red-color" type="radio" name="select-color" value="ff0000" />
								<label for="red-color">Vermelho</label>
							</div>
							<div class="container">
								<label for="green-color">
									<div id="display-green-color" class="display-color"></div>
								</label>
								<input id="green-color" type="radio" name="select-color" value="00ff00" />
								<label for="green-color">Verde</label>
							</div>
							<div class="container">
								<label for="yellow-color">
									<div id="display-yellow-color" class="display-color"></div>
								</label>
								<input id="yellow-color" type="radio" name="select-color" value="ffff00" />
								<label for="yellow-color">Amarelo</label>
							</div>
							<div id="other-container" class="container">
								<label for="other-color">
									<div id="display-other-color" class="display-color">
										<span>#</span>
										<input id="input-other-color" type="text" name="input-other-color" />
									</div>
								</label>
								<input id="other-color" type="radio" name="select-color" value="other" onc/>
								<label for="other-color">Personalizado</label>
							</div>
						</div>
						<input type="submit" value="Salvar"/>
					</form>
				</div>
			</div> <!--Fim container interno-->

		</div> <!--Fim container-main-->
	</div>  <!--Fim .row-for-float-->
	<footer id="footer-dashboard">
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="../frame/rodape.php"></iframe>
	</footer>
<!-- Fim do conteúdo -->
<script src="../js/identidadevisual-scripts.js"></script>
</body>
</html>