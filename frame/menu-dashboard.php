<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<link rel="stylesheet" type="text/css" href="../css/menu-dashboard-style.css">
	<title>Dashboard</title>
</head>
<body>
	<div id="container-menu">
		<div id="panel-identificacao">
			<div class="row-for-float">
				<img src="http://placehold.it/120x120" class="img-rounded float-left">
				<div class="welcome">
					<p>Welcome,</p>
					<b>
						<?php
							session_start();
							echo isset($_SESSION["authenticatedUserName"]) ? $_SESSION["authenticatedUserName"] : "Unknow";
						?>
					</b>
				</div>
			</div>
		</div>
		<nav>
		  	<ul>
		  		<li><a target="_parent" href="../dashboard/dashboard.php">Dashboard</a></li>
		  		<li><a target="_parent" href="../dashboard/#">Meu Cadastro</a></li>
				<li><a target="_parent" href="../dashboard/identidadevisual.php">Identidade Visual</a></li>
			  	<li><a target="_parent" href="../dashboard/navegabilidade.php" >Navegabilidade</a></li>
			  	<li><a target="_parent" href="../dashboard/#">Publicar Noticia</a></li>
			  	<li><a target="_parent" href="../dashboard/#">Editar Sobre</a></li>
			  	<li><a target="_parent" href="../dashboard/#">Editar Autores</a></li>
			  	<li><a target="_parent" href="../actions/logout.php">Sair</a></li>
			</ul>
		</nav>
	</div>
</body>
</html>