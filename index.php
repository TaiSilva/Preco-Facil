<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PreçoFácil</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src=""></script>
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
	<main>
	
		<form method="post" action="buscarpreco.php" class="m-5">
			<div class="container">
				<div class="row m-5 col-xs-4 col-md-12">
					<div class="col-8">
						<input type="text" class="form-control" id="formGroupExampleInput" name="buscar" placeholder="Buscar promoção">
					</div>
					<div class="col">
						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
					</div>	
				</div>
			</div>	
		</form>
		<?php @session_start(); if(@$_SESSION['logado'] == 'logado'){?>
			<div class="text-center col-md-12">
				<a href="cadproduto.php"><button class="btn my-2 my-sm-0 btn-lg botao-cor-especial" type="submit">Cadastrar promoção</button></a>
			</div>
		<?php }else{ ?>	
			<div class="text-center col-md-12">
				<a href="#" data-toggle="modal" data-target="#modal-login"><button class="btn my-2 my-sm-0 btn-lg botao-cor-especial" type="submit">Cadastrar promoção</button></a>
			</div>
		<?php } ?>
	</main>
	
<footer class="bg-secondary p-3 corfundo fixed-bottom">
	<ul class="list menu"><h6 class="text-light">Atendimento ao cliente</h6>
		<li class="list-item"><a href="#" class="text-white-50" data-toggle="modal" data-target="#modal-contato">Fale com a gente</a></li>
	</ul>
	<p class="text-light m-0 text-center">contato: <a class="text-light" href="mailto:email@precofacil.com.br">email@precofacil.com.br</a></p>
</footer>

<!-- Modal -->
<div class="modal fade" id="modal-contato" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <header class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Entre em contato</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
      </header>
      <main class="modal-body">
			<form>
				<div class="form-group">
					<label for="formGroupExampleInput">Nome completo</label>
					<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira seu nome">
				</div>
				<div class="form-group">
					<label for="exampleFormControlInput1">Endereço de e-mail</label>
					<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Deixe seu comentário</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Insira aqui seu comentário"></textarea>
				</div>
			</form>
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <a href="envia-email.php"><button type="button" class="btn botao-cor-especial">Enviar</button></a>
      </footer>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade modalaviso" id="modal-aviso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <header class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Cadastro Supermercado</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
      </header>
      <main class="modal-body">
			<div><h3>Cadastro efetuado com sucesso!</h3></div>
      </main>
      <footer class="modal-footer">
        <button type="button" class="btn btn-secondary" id="fecharmodal" data-dismiss="modal">Fechar</button>
		<a href="logincliente.html"><button type="button" class="btn botao-cor-especial">Login</button></a>
      </footer>
    </div>
  </div>
</div>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src=""></script>
<!-- Modal login-->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div id="addToCartLayer" class="add-to-cart">
			<div class="cart_popup_error_msg f-w-normal fs-20 f-f-pluto-sans text-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="yellow" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
					<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>
				<p class="f-f-pluto">Para prosseguir precisa realizar login.</p>
				<div class="row">
					<div class="col-md-6">
						<a href="logincliente.html" class="btn btn-action-1 btn-block btn-rounded f-f-pluto-sans fs-12 product--purchase-button">LOGIN</a>
					</div>
				</div>
			</div>
		</div>
    </div>
  </div>
</div>
</body>
</html>