<?php
	include '../common/common.php';

	function navegabilidadeBuild($menu1, $menu2, $menu3, $menu4){

		$file = "../frame/master-page.php";

		$content = "<!DOCTYPE html>
					<html>
					<head lang=\"pt-BR\">
						<meta charset=\"UTF-8\">
						<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/global.css\">
						<link rel=\"stylesheet\" type=\"text/css\" href=\"../css/master-page-style.css\">
						<title>MasterPage</title>
					</head>
					<body>
						<div id=\"navbar\">
							<nav>
							  <ul>
							  	<li><a id=\"item-home\" target=\"_parent\" href=\"../index.php\">CCNews</a></li>
								". $menu1 ."
								". $menu2 ."
								". $menu3 ."
								". $menu4 ."
							  </ul>
							</nav>
							<div id=\"container-form\">
								<form method=\"POST\" action=\"../dashboard/dashboard.php\" target=\"_parent\">
									<input type=\"text\" name=\"login\" placeholder=\"E-mail\" required/>
									<input type=\"password\" name=\"password\" placeholder=\"Senha\" required/>
									<input type=\"submit\" value=\"Entrar\">
								</form>
							</div>
						</div>
					</body>
					</html>";

		subscribeFile($file, $content);
	}
?>