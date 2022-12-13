<?php
		
	$conexao = mysqli_connect('localhost','root','','precofacil');
	if (!$conexao) die(mysqli_error($conexao));
	$imagem = $_POST['imagem'];

	$nomeproduto = $_POST['nomeproduto'];
	$marca = $_POST['marca'];
	$medida = $_POST['medida'];
	$tipomedida = $_POST['tipomedida'];
	$validade = $_POST['validade'];
	$fabricante = $_POST['fabricante'];
	$preco = $_POST['preco'];
	$supermercado = $_POST['supermercado'];

	//echo "codigo ",$imagem;
	$sql= "INSERT INTO promocao (nome, marca, tamanho, tipometragem, imagem, valor, validade,fabricante,supermercado) VALUES ('$nomeproduto', '$marca', '$medida', '$tipomedida', '$imagem', '$preco', '$validade','$fabricante','$supermercado')";
	
	$erro = mysqli_query($conexao,$sql);
		if(!$erro) die(mysqli_error($conexao));
		

		header('Location: index.php');

		
	
	//echo $sql;
?>