<?php 
	include '../builders/navegabilidadeBuilder.php';

	if(isset($_POST["position-sobre"]) && isset($_POST["position-autores"]) && isset($_POST["position-contato"]) && isset($_POST["position-cadastro"])){
		$positionSobre = $_POST["position-sobre"];
		$positionAutores = $_POST["position-autores"];
		$positionContato = $_POST["position-contato"];
		$positionCadastro = $_POST["position-cadastro"];

		$contentSobre = "<li><a target=\"_parent\" href=\"../sobre.php\">Sobre</a></li>";
		$contentAutores = "<li><a target=\"_parent\" href=\"../autores.php\">Autores</a></li>";
		$contentContato = "<li><a target=\"_parent\" href=\"../contate-nos.php\">Contato</a></li>";
		$contentCadastro = "<li><a target=\"_parent\" href=\"../cadastro.php\">Cadastro</a></li>";

		//Position Sobre
		if($positionSobre == 1){
			$menu1 = $contentSobre;
		}
		else if($positionSobre == 2){
			$menu2 = $contentSobre;
		}
		else if($positionSobre == 3){
			$menu3 = $contentSobre;
		}
		else if($positionSobre == 4){
			$menu4 = $contentSobre;
		}

		//Position Autores
		if($positionAutores == 1){
			$menu1 = $contentAutores;
		}
		else if($positionAutores == 2){
			$menu2 = $contentAutores;
		}
		else if($positionAutores == 3){
			$menu3 = $contentAutores;
		}
		else if($positionAutores == 4){
			$menu4 = $contentAutores;
		}

		//Position Contato
		if($positionContato == 1){
			$menu1 = $contentContato;
		}
		else if($positionContato == 2){
			$menu2 = $contentContato;
		}
		else if($positionContato == 3){
			$menu3 = $contentContato;
		}
		else if($positionContato == 4){
			$menu4 = $contentContato;
		}

		//Position Cadastro
		if($positionCadastro == 1){
			$menu1 = $contentCadastro;
		}
		else if($positionCadastro == 2){
			$menu2 = $contentCadastro;
		}
		else if($positionCadastro == 3){
			$menu3 = $contentCadastro;
		}
		else if($positionCadastro == 4){
			$menu4 = $contentCadastro;
		}

		navegabilidadeBuild($menu1, $menu2, $menu3, $menu4);
	}
?>

<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<title>Navegabilidade</title>
	<link rel="shortcut icon" type="image/png" href="../img/icontitle.png">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard-style.css">
	<link rel="stylesheet" type="text/css" href="../css/navegabilidade-style.css">
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
			<div class="container-dashboard">
				<div class="header">
					<h2>Manutenção - Navegabilidade</h2>
				</div>
				<div class="body">
					<div class="row-for-float">
						<form method="POST" action="" target="_parent">
							<div class="float-left">
								<div>
									<label>Sobre</label>
								</div>
								<div>
									<label>Autores</label>
								</div>
								<div>
									<label>Contato</label>
								</div>
								<div>
									<label>Cadastro</label>
								</div>
							</div>
							<div id="opcoes-position" class="float-right">
								<div>
									<div>
										<input id="position-sobre-1" type="radio" name="position-sobre" value="1" />
										<label for="position-sobre-1">1</label>
									</div>

									<div>
										<input id="position-sobre-2" type="radio" name="position-sobre" value="2" />
										<label for="position-sobre-2">2</label>
									</div>

									<div>
										<input id="position-sobre-3" type="radio" name="position-sobre" value="3" />
										<label for="position-sobre-3">3</label>
									</div>

									<div>
										<input id="position-sobre-4" type="radio" name="position-sobre" value="4" />
										<label for="position-sobre-4">4</label>
									</div>
								</div>
								<div>
									<div>
										<input id="position-autores-1" type="radio" name="position-autores" value="1" />
										<label for="position-autores-1">1</label>
									</div>

									<div>
										<input id="position-autores-2" type="radio" name="position-autores" value="2" />
										<label for="position-autores-2">2</label>
									</div>

									<div>
										<input id="position-autores-3" type="radio" name="position-autores" value="3" />
										<label for="position-autores-3">3</label>
									</div>

									<div>
										<input id="position-autores-4" type="radio" name="position-autores" value="4" />
										<label for="position-autores-4">4</label>
									</div>
								</div>
								<div>
									<div>
										<input id="position-contato-1" type="radio" name="position-contato" value="1" />
										<label for="position-contato-1">1</label>
									</div>

									<div>
										<input id="position-contato-2" type="radio" name="position-contato" value="2" />
										<label for="position-contato-2">2</label>
									</div>

									<div>
										<input id="position-contato-3" type="radio" name="position-contato" value="3" />
										<label for="position-contato-3">3</label>
									</div>

									<div>
										<input id="position-contato-4" type="radio" name="position-contato" value="4" />
										<label for="position-contato-4">4</label>
									</div>
								</div>
								<div>
									<div>
										<input id="position-cadastro-1" type="radio" name="position-cadastro" value="1" />
										<label for="position-cadastro-1">1</label>
									</div>

									<div>
										<input id="position-cadastro-2" type="radio" name="position-cadastro" value="2" />
										<label for="position-cadastro-2">2</label>
									</div>

									<div>
										<input id="position-cadastro-3" type="radio" name="position-cadastro" value="3" />
										<label for="position-cadastro-3">3</label>
									</div>

									<div>
										<input id="position-cadastro-4" type="radio" name="position-cadastro" value="4" />
										<label for="position-cadastro-4">4</label>
									</div>
								</div>
							</div>
							<div class="clear-left">
								<div class="float-right">
									<input type="submit" value="Salvar" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> <!--Fim container-main-->
	</div>  <!--Fim .row-for-float-->
	<footer id="footer-dashboard">
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="../frame/rodape.php"></iframe>
	</footer>
</body>
<!-- Fim do conteúdo -->
</html>