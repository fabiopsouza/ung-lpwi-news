<?php
	if(isset($_POST['cadastro'])){
		include 'common/common.php';

		$email = $_POST['email'];
		$senha = $_POST['senha'];
		
		writeFile("security/security.txt", $email .";". $senha ."|");

		header('location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/png" href="img/icontitle.png">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/contate-nos-style.css">
	<title>CCNews | Cadastro</title>
</head>
<body>
	<header>
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="frame/master-page.php"></iframe>
	</header>
	<div id="container-main">
		<section>
			<h1>Cadastre seu usuário</h1>
			<div class="formulario">
				<form class="formulario" method="post" action="">
				<fieldset>
					<label>Email:</label><input type="email" name="email" value="" placeholder="email@exemplo.com" required />
					<label>Senha:</label><input type="password" name="senha" placeholder="Digite a senha" required />
					<input class="btn-form" type="submit" name="cadastro" id="cadastro" value="Cadastrar" />
				</fieldset>
				</form>
			</div>
		</section>
		<aside>
			<!--Não alterar nada dentro dessa tag! -->
			<iframe src="frame/ultimas-noticias.php"></iframe>
		</aside>
	</div> <!--Fim container-main-->
	<footer>
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="frame/rodape.php"></iframe>
	</footer>
</body>
<!-- Fim do conteúdo -->
</html>