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
		  </ul>
		</nav>
		<div id="container-form">
			<form method="POST" action="dashboard/dashboard.php">
				<input type="text" name="login" placeholder="E-mail" required/>
				<input type="password" name="password" placeholder="Senha" required/>
				<input type="submit" value="Entrar">
			</form>
		</div>
	</div>
</body>
</html>