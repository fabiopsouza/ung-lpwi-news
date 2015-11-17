<?php
	session_start();

	if(!isset($_SESSION["authenticatedUserName"])){
		header("location: ../index.php");
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
			<h1>Em construção</h1>
		</div> <!--Fim container-main-->
	</div>  <!--Fim .row-for-float-->
	<footer id="footer-dashboard">
		<!--Não alterar nada dentro dessa tag! -->
		<iframe src="../frame/rodape.php"></iframe>
	</footer>
</body>
<!-- Fim do conteúdo -->
</html>