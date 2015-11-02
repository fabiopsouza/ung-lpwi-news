<?php
	if(isset($_POST['cadastro'])){
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		setcookie('cookieemail:',$email,time()+604800);
		setcookie('cookiesenha:',$senha,time()+604800);
		header('location: index.php');
		
		//$texto = $_POST['cadastro'];
		//$arquivo = $_FILES['email']['name'];
		$arq = fopen("security/security.txt","a");
		$escreve = fwrite($arq, "$email;$senha|");
		fclose($arq);
	}
?>


<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="shortcut icon" type="image/png" href="img/icontitle.png">
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
				<form method="post" action="">
				<fieldset>
					<label>Email:</label><input type="email" name="email" value="" placeholder="email@exemplo.com" required />
					<label>Senha:</label><input type="password" name="senha" placeholder="Digite a senha" required />
					<input type="submit" name="cadastro" id="cadastro" value="Cadastrar" />
				</fieldset>
				</form>
			</div>
	<?php
		if(isset($_GET['erro'])){
			echo "Email ou senha inválidos";
		}elseif(isset($_GET['erro-sessao'])){
			echo "Sua sessão acabou! Entre novamente";
		}
	?>
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