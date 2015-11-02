<?php
	if(isset($_COOKIE['email'])){
		$email = $_COOKIE['email'];
		$senha = $_COOKIE['senha'];
		setcookie('email',$email,time()+604800);
		setcookie('senha',$senha,time()+604800);
	}
?>