<?php
	session_start();
	if(isset($_SESSION["showInvalidLogon"])){
		echo "<script type='text/javascript'>alert('Usuário ou senha incorretos!')</script>";
		$_SESSION["showInvalidLogon"] = null;
	}
?>
<!DOCTYPE html>
<html>
<head lang="pt-BR">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/index-style.css">
	<link rel="shortcut icon" type="image/png" href="img/icontitle.png">
	<title>CCNews | Portal de Notícias</title>
</head>
<body>
	<header>
		<iframe src="frame/master-page.php"></iframe>
	</header>
	<div id="container-main">
		<section>
			<h1>Principais notícias</h1>			
			<div class="nivel-um">
				<a href="noticia.php">
					<img src="http://placehold.it/700x250x" alt="Notícia de nível 1">
				</a>
				<a href="noticia.php">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo.</a>
				<p>Lorem ipsum dolor sit amet, elites det adipisicing yloren sumpe now. Lorem ipsum dolor sit amet, a elit, sed do eiusmod. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia..</p>		
			</div>	
			<div class="row-for-float">
				<div class="nivel-dois">
					<a href="noticia.php">
						<img src="http://placehold.it/300x400" alt="Notícia de nível 2">
					</a>
					<a href="noticia.php">Lorem ipsum dolor sit amet.</a>
					<p>Lorem ipsum dolor sit amet, elites det adipisicing yloren sumpe now.</p>	
				</div>
				<div class="nivel-tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/210x130" alt="Notícia de nível 3">
					</a>
					<div class="nivel-tres-texto">
						<a href="noticia.php">Lorem ipsum sit</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua enim admur.</p>
					</div>
				</div>
				<div class="nivel-tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/210x130" alt="Notícia de nível 3">
					</a>
					<div class="nivel-tres-texto">
						<a href="noticia.php">Lorem ipsum sit</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua enim admur.</p>
					</div>
				</div>
				<div class="nivel-tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/210x130" alt="Notícia de nível 3">
					</a>
					<div class="nivel-tres-texto">
						<a href="noticia.php">Lorem ipsum sit</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua enim admur.</p>
					</div>
				</div>
			</div>
			<div class="row-for-float">
				<div class="nivel-quatro um">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro dois">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro quatro">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
			</div>
			<div class="row-for-float">
				<div class="nivel-quatro um">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro dois">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro quatro">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
			</div>
			<div class="row-for-float">
				<div class="nivel-quatro um">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro dois">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro tres">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
				<div class="nivel-quatro quatro">	
					<a href="noticia.php">
						<img src="http://placehold.it/160x170" alt="Notícia de nível 3">
					</a>
					<a href="noticia.php">Lorem ipsum sit</a>
					<p>Lorem ipsum dolor sit amet, sito adipisicing elit, sed do eiusmod
					tempor incididunt.</p>
				</div>
			</div>
		</section>
	<aside>
		<iframe src="frame/ultimas-noticias.php"></iframe>
	</aside>
	</div> <!--Fim container-main-->
	<footer>
		<iframe src="frame/rodape.php"></iframe>
	</footer>
</body>
<!-- Fim do conteúdo -->
</html>