<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Loja Fictícia</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="src/stylepreco.css">
  
</head>
<header class="">
		<section class="primeiroNavbar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light corfundo">
				<a class="navbar-brand fonte-cursive fonte-cor" href="index.php"><img src="src/img/logoremove.png" height="75px" width="150px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					
					<ul class="navbar-nav">
						<li class="nav-item">
							<div class="dropdown">
								<?php @session_start(); if(@$_SESSION['logado'] == 'logado') {?> 
									<button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
										<span>Olá, <?php echo @$_SESSION['usuario']?></span>
									</button>
								<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
									<button class="dropdown-item" type="button">Perfil</button>
									<a href="sair.php"> <button class="dropdown-item" type="button">Sair</button></a>
								</div>
								<?php }else{?>
									<a class="nav-link fonte-cor" href="logincliente.html"><span>Entrar</span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-right" viewBox="0 0 16 16">
										<path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8Zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5Z"/>
										</svg>
									</a><?php } ?>
									
							</div>
							
						</li>
						
					</ul>
					
				</div>
				
			</nav>
		</section>
	
	</header>	
  <title>Preço Fácil</title>
<body>

	
<?php
	$conexao = mysqli_connect('localhost','root','','precofacil');

	if (!$conexao) die(mysqli_error($conexao));
	
	@$buscar = $_POST['buscar'];
	@$buscar = filter_var($_REQUEST['buscar'],FILTER_SANITIZE_STRING);

	$sql="SELECT promocao.imagem, promocao.nome, promocao.marca, promocao.tamanho, promocao.tipometragem, promocao.valor, supermercado.nome as supermercado FROM promocao left join supermercado ON supermercado.codigo = promocao.supermercado WHERE promocao.nome like '%$buscar%';";
	$busca = mysqli_query($conexao, $sql);
	
echo "<div class='row justify-content-center w-100 p-4'>Resultados da pesquisa:</div>";
echo "<section class ='container-fluid'>";
echo "<div class='row justify-content-center m-0'>";

	while ($linha = mysqli_fetch_assoc($busca)){
			//echo '<a href="detalhe-produto.php?codigo=' . $linha['codigo'] . '" class="card-link link">';
				echo '<article class="card border-cor-especial card-largura p-0 m-4 col-12 col-md-4">';
					if($linha['imagem'] == '' || $linha['imagem'] == null){
						echo '<img src="src/img/semimagem.jpg" class="card-img-top" alt="...">';
					}else{
						echo '<img src="' . $linha['imagem'] . '" class="card-img-top" alt="...">';
					}
					
					echo '<div class="card-body">';
						echo '<h5 class="card-title"> ' . $linha['nome'] . ' ' . $linha['marca'] . ' ' . $linha['tamanho'], $linha['tipometragem'] . ' </h5>';
						echo '<h5>Por apenas: R$' . $linha['valor'] . '</h5>';
						echo '<h6>No Supermercado: <a href="https://www.google.com/search?q=' . $linha['supermercado'] . '">' . $linha['supermercado'] . '</a></h6>';
						//echo '<a href="#" class="card-link m-1 botao-cor-especial">Mais detalhes</a>';
					echo '</div>';
				echo '</article>';	
			echo '</a>';

	}
echo "</div>";
echo "</section>";

?>



	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src=""></script>


</body>
</html>