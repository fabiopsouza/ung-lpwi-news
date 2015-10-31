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
			

			
			<div id="container" class="container-dashboard">
				<div class="header">
					<h2>Identidade Visual</h2>
				</div>
				<div class="body">
					<form method="POST" action="" target="_parent">
						<div class="row-for-float">
							<div id="first-container" class="container">
								<div id="display-default-color" class="display-color"></div>
								<input id="default-color" type="radio" name="select-color" value="default" />
								<label for="default-color">Defalut</label>
							</div>
							<div class="container">
								<div id="display-red-color" class="display-color"></div>
								<input id="red-color" type="radio" name="select-color" value="red" />
								<label for="red-color">Vermelho</label>
							</div>
							<div class="container">
								<div id="display-green-color" class="display-color"></div>
								<input id="green-color" type="radio" name="select-color" value="green" />
								<label for="green-color">Verde</label>
							</div>
							<div class="container">
								<div id="display-yellow-color" class="display-color"></div>
								<input id="yellow-color" type="radio" name="select-color" value="yellow" />
								<label for="yellow-color">Amarelo</label>
							</div>
							<div id="other-container" class="container">
								<div id="display-other-color" class="display-color">
									<span>#</span>
									<input id="input-other-color" type="text" name="input-other-color" />
								</div>
								<input id="other-color" type="radio" name="select-color" value="other" />
								<label for="other-color">Personalizado</label>
							</div>
						</div>
						<input type="submit" name="select-color" value="Salvar"/>
					</form>
				</div>
			</div> <!--Fim container interno-->
		</div> <!--Fim container-main-->
	</div>  <!--Fim .row-for-float-->
	<footer id="footer-dashboard">
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="../frame/rodape.php"></iframe>
	</footer>
</body>
<!-- Fim do conteúdo -->
</html>