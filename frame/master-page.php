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
			<?php
				session_start();

				if(isset($_SESSION["authenticatedUserName"])){
					$loggedInContent = "<div class='linkLoggedIn'><label>Welcome</label> <a target='_parent' href='../dashboard/dashboard.php'>". 
					$_SESSION["authenticatedUserName"] ."</a><label> (</label><a id='logout' target='_parent' href='../actions/logout.php'>Logout</a><label>)</label></div>";

					echo $loggedInContent;
				}
				else{
					$loggedOutContent = "<form method='POST' action='' target='_parent'>
											<input type='text' name='mail' placeholder='E-mail' required/>
											<input type='password' name='password' placeholder='Senha' required/>
											<input type='submit' value='Entrar'>
										</form>";

					echo($loggedOutContent);
				}
			?>
		</div>
	</div>	

	<?php 
		if(isset($_POST["mail"]) && isset($_POST["password"])){
			
			include '../common/common.php';

			$inputMail = $_POST["mail"];
			$inputPassword = $_POST["password"];

			$conteudo_security = getSecurityContent();
			echo $conteudo_security ."</br></br>";
			
			$array_security = explode("|", $conteudo_security);

			foreach($array_security as $item){
				
				$aux = explode(";", $item);
				
				$auxMail = $aux[0];
				$auxPassword = $aux[1];
				
				if ($inputMail == $auxMail && $inputPassword == $auxPassword){
					$_SESSION["authenticatedUserName"] = $inputMail;
				}
			}

			if(isset($_SESSION["authenticatedUserName"])){
				header("location: ../dashboard/dashboard.php");
			}
			else{
				$_SESSION["showInvalidLogon"] = true;
				header("location: ../index.php");
				
			}
			
		}
	?>
</body>
</html>