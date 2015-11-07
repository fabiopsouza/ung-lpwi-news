<?php
	if(isset($_POST['nome']) && 
		isset($_POST['email']) &&
		isset($_POST['telefone']) && 
		isset($_POST['estado']) && 
		isset($_POST['cidade']) && 
		isset($_POST['cidade']) &&
		isset($_POST['mensagem'])){

		$para = "cicungnews@gmail.com";
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$telefone = $_POST['telefone'];
		$estado = $_POST['estado'];
		$cidade = $_POST['cidade'];
		$mensagem = $_POST['mensagem'];
		$assunto = "CCNews";

		$corpo = "Nome: $nome <br> E-mail: $email <br>";
		$corpo .= "Telefone: $telefone <br> Estado: $estado <br>";
		$corpo .= "Cidade: $cidade <br> Mensagem: $mensagem <br>";

		$headers ="Content-Type: text/html; charset=UTF-8\n";
		  
		mail($para, $assunto,$corpo, $headers);
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/contate-nos-style.css">
	<link rel="shortcut icon" type="image/png" href="img/icontitle.png">
	<title>CCNews | Contato</title>
</head>
<body>
	<header>
		<iframe src="frame/master-page.php"></iframe>
	</header>
	<div id="container-main">
		<section class="contate-nos">
			<h1>Contate-nos</h1>
			<p>Preencha o formulário abaixo e envie sua mensagem, crítica ou sugestão.</p>
			<div class="formulario">
				<form id="formContato" name="formcontato" method="POST" action="#">
					<fieldset>
						<label for="nome">Nome</label>
						<input type="text" id="nome" name="nome"  autofocus placeholder="Digite seu nome" />
						<label for="email">Email</label>
						<input type="email" id="email" name="email"  placeholder="Digite seu e-mail" />
						<label for="telefone">Telefone</label>
						<input type="tel" id="telefone" name="telefone" pattern="[0-9]{2} [0-9]{4}[0-9]{4}" placeholder="99 99999999" title="Digite o DDD + 8 numeros" />
						<label for="estado">Estado</label>
						<select name="estado" id="estado">
							<option value="Selecione">Selecione</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option></select>
						<label for="cidade">Cidade</label>
						<input type="text" id="cidade" name="cidade"  placeholder="Digite sua cidade" />
						<label for="mensagem">Mensagem</label>
						<textarea rows="4" cols="50" id="mensagem" name="mensagem"  placeholder="Digite sua mensagem"></textarea>
						<input type="submit" class="btn-form" name="enviar" value="Enviar"/>
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

</html>