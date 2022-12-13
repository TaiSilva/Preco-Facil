<?php

	$conexao = mysqli_connect('localhost','root','','precofacil');

	if (!$conexao) die(mysqli_error($conexao));
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	//$sql="SELECT email, senha FROM usuario WHERE email = '$email' and senha = '$senha'";
	$sql = "SELECT SUBSTRING_INDEX(SUBSTRING_INDEX(nomecompleto, ' ', 1), ' ', -1) AS primeironome, senha, email FROM usuario WHERE email = '$email'";

	$busca = mysqli_query($conexao, $sql);
	$apresenta = mysqli_fetch_assoc($busca);

	if ($apresenta['senha'] == $senha){
	    //session_save_path('/storage/ssd1/401/19371401/tmp');
		session_start();
		$_SESSION['usuario'] = $apresenta['primeironome'];
		$_SESSION['logado'] = 'logado';
		$_SESSION['email'] = $apresenta['email'];
		header('Location: index.php');

	}else{
		header('Location: logincliente.html?erro=true');
	}
	
?>

