<?php
	header('Content-Type: application/json');
	
	$conexao = mysqli_connect('localhost','root','','precofacil');
	if (!$conexao) die(mysqli_error($conexao));
	$acao = $_POST['acao'];

	if($acao == 'inserirSuper'){
		$nomesuper = $_POST['nomesuper'];
		$cepsuper = $_POST['cepsuper'];
		$logradourosuper = $_POST['logradourosuper'];
		$numerosuper = $_POST['numerosuper'];
		$bairrosuper = $_POST['bairrosuper'];
		$cidadesuper = $_POST['cidadesuper'];
		$ufsuper = $_POST['ufsuper'];
		
		$sql= "INSERT INTO supermercado (nome, cep, logradouro, numero, bairro, cidade, uf) VALUES ('$nomesuper', '$cepsuper', '$logradourosuper', '$numerosuper', '$bairrosuper', '$cidadesuper', '$ufsuper')";
		
		$erro = mysqli_query($conexao,$sql);
		if(!$erro) die(mysqli_error($conexao));
		
		
		echo json_encode("sucesso");
	}else{
		$nomecompleto = filter_var($_REQUEST['nomecompleto'],FILTER_SANITIZE_STRING);
		$email = filter_var($_REQUEST['email'],FILTER_SANITIZE_STRING);
		
		$dtnascimento = @$_REQUEST['dtnascimento'];
		$data = new DateTime($dtnascimento);
		$dataFormatada = $data->format('Y-m-d');
		
		$sexo = filter_var(@$_REQUEST['sexo'],FILTER_SANITIZE_STRING);
	
		if ($sexo=='option2'){
			$sexo='M';
		}else{
			$sexo='F';
		}
		$cep = filter_var($_REQUEST['cep'],FILTER_SANITIZE_STRING);
		$endereco = filter_var($_REQUEST['endereco'],FILTER_SANITIZE_STRING);
		$numero = filter_var($_REQUEST['numero'],FILTER_SANITIZE_STRING);
		$bairro = filter_var($_REQUEST['bairro'],FILTER_SANITIZE_STRING);
		$cidade = filter_var($_REQUEST['cidade'],FILTER_SANITIZE_STRING);
		$uf = filter_var(@$_REQUEST['uf'],FILTER_SANITIZE_STRING);
		$celular = filter_var(@$_REQUEST['celular'],FILTER_SANITIZE_STRING);
		$ddd = filter_var(@$_REQUEST['ddd'],FILTER_SANITIZE_STRING);
		
		//$data = new DateTime($datanasc);
		//$telefoneformatado = $telefone->format('yyyyy-yyyy');
		
		$senha = filter_var($_REQUEST['senha'],FILTER_SANITIZE_STRING);
		
		$sql= "INSERT INTO usuario (nomecompleto, email, datanascimento, genero, cep, celular, senha) VALUES ('$nomecompleto', '$email', '$dataFormatada', '$sexo', '$cep', '$ddd $celular', '$senha')";
		
		$erro = mysqli_query($conexao,$sql);
		if(!$erro) die(mysqli_error($conexao));	
		
		header('Location: logincliente.html');
	}	
	
	
	//echo $sql;
?>