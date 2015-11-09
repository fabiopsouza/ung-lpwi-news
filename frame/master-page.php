<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/master-page-style.css">
	<title>MasterPage</title>
</head>
<body>
	<div id="navbar">
		<nav>
		  <ul>
			<li><a id="item-home" target="_parent" href="../index.php">CCNews</a></li>
			<li><a target="_parent" href="../sobre.php">Sobre</a></li>
			<li><a target="_parent" href="../autores.php">Autores</a></li>
			<li><a target="_parent" href="../contate-nos.php">Contato</a></li>
			<li><a target="_parent" href="../cadastro.php">Cadastro</a></li>
		  </ul>
		</nav>
		<div id="container-form">
			<form method="POST" action="../dashboard/dashboard.php" target="_parent">
				<input type="text" name="login" placeholder="E-mail" required/>
				<input type="password" name="password" placeholder="Senha" required/>
				<input type="submit" value="Entrar">
			</form>
		</div>
	</div>
	<h1>teste</h1>
	
	<?php $conteudo_security = file_get_contents("../security/security.txt");
	echo "Passo 1 ".$conteudo_security."<br><br>";
	
	$array_security = explode("|", $conteudo_security);
	echo "Passo 2 ".$array_security[1]."<br><br>";
	
	foreach($array_security as $item){
		echo "Passo 3 ".$item."<br><br>";
		
		$aux = explode(";", $item);
		echo " Paso 4 | ".$aux[0]." e ".$aux[1];
		$login = $aux[0];
		$senha = $aux[1];
		
		/*if ((login = $login)&&(senha - $senha)){
			header('location: ../dashboard/dashboard.php');
		}*/
	}
	?>
	
</body>
</html>