<?php 
	session_start();
	$_SESSION["authenticatedUserName"] = null;
	session_destroy();
    session_unset();
    header('Location: ../index.php'); 
?>