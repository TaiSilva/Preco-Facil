<?php
	
	session_start();
	
	unset($_SESSION['usuario']);
	unset($_SESSION['logado']);
	
	header('Location: index.php');
?>