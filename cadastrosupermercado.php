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
<body>

	<header class="">
		<section class="primeiroNavbar">
			<nav class="navbar navbar-expand-lg navbar-light bg-light corfundo">
				<a class="navbar-brand fonte-cursive fonte-cor" href="index.php"><img src="src/img/logoremove.png" height="75px" width="150px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				
			</nav>
		</section>
		
	</header>	
  <title>Preço Fácil</title>
<body>
	<div class="pl-5 pb-3">
		<form action="" method="post" class="">
			<div class="row m-0">
				<div class="row m-0">
					<h1 class="col-md-12 mt-3 text-center">Cadastro Supermercado</h1>
					<div class="col-md-6">
						<div class="form-group m-0 p-0 mt-3 w-75">
							<label class="form-label">Nome Supermercado</label>
							<input  type="text" class="form-control nome" name="nomesuper" id="nomesuper" placeholder="Insira o nome do supermercado" required>
						</div>
						<div class="row m-0 p-0 mt-3">
							<div class="form-group tamanhopadrao">
								<label class="form-label">CEP*</label>
								<input type="text" class="form-control" id="cepsuper" name="cepsuper" value  placeholder="00000-000" required>
							</div>
							<div class="form-group w-75 col-md-4">
								<label class="form-label">Logradouro</label>
								<input type="text" class="form-control" id="logradourosuper" name="logradourosuper" value  placeholder="" required>
							</div>	
							<div class="form-group col-md-4">
								<label class="form-label">Número</label>
								<input type="text" class="form-control" id="numerosuper" name="numerosuper" value  placeholder="" required>
							</div>	
							<div class="form-group">
								<label class="form-label">Bairro</label>
								<input type="text" class="form-control" id="bairrosuper" name="bairrosuper" value  placeholder="" required>
							</div>	
							<div class="form-group col-md-4">
								<label class="form-label">Cidade</label>
								<input type="text" class="form-control" id="cidadesuper" name="cidadesuper" value  placeholder="" required>
							</div>	
							<div class="form-group">
								<label class="form-label">UF</label>
								<div class="input-group mb-3">
									<select class="custom-select" id="ufsuper">
										<option selected>Escolha...</option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</div>
							</div>	
						</div>
					</div>	
						
				</div>
				
					
				
			</div>	
		
			<button class="btn btn-outline-dark btn-lg tamanho-btn mt-3 button" id="formularioSupermercado" type="submit" name="enviar" value="enviar">Enviar</button>
			
		</form>
	</div>

</main>
<script>
    $(document).ready(function () { 
        $("#cepsuper").mask("99999-999");
    });

	$("#cepsuper").blur (function () {
		var cep = this.value.replace(/[^0-9]/, "");
		console.log(cep);
		//Início do Comando AJAX
		$.ajax({
			//O campo URL diz o caminho de onde virá os dados
			//É importante concatenar o valor digitado no CEP
			url: 'https://viacep.com.br/ws/'+cep+'/json',
			//Aqui você deve preencher o tipo de dados que será lido,
			//no caso, estamos lendo JSON.
			
			dataType: 'json',
			//SUCESS é referente a função que será executada caso
			//ele consiga ler a fonte de dados com sucesso.
			//O parâmetro dentro da função se refere ao nome da variável
			//que você vai dar para ler esse objeto.
			success: function(resposta){
				//Agora basta definir os valores que você deseja preencher
				//automaticamente nos campos acima.
				$("#logradourosuper").val(resposta.logradouro);
				$("#bairrosuper").val(resposta.bairro);
				$("#cidadesuper").val(resposta.localidade);
				$("#ufsuper").val(resposta.uf);
				//Vamos incluir para que o Número seja focado automaticamente
				//melhorando a experiência do usuário
				$("#numerosuper").focus();
			}
		});
	});
	$('form').on('click', '#formularioSupermercado', function(e){
		e.preventDefault();
		var u_nome = document.getElementById("nomesuper").value;
		var u_cep = document.getElementById("cepsuper").value;
		var u_logradoouro = document.getElementById("logradourosuper").value;
		var u_numero = document.getElementById("numerosuper").value;
		var u_bairro = document.getElementById("bairrosuper").value;
		var u_cidade = document.getElementById("cidadesuper").value;
		var u_uf = document.getElementById("ufsuper").value;
		var u_acao = 'inserirSuper';
		
			$.ajax({
				url: 'inserircadastrocliente.php',
				method:'POST',
				data: {'nomesuper':u_nome, 'cepsuper':u_cep, 'logradourosuper':u_logradoouro, 'numerosuper':u_numero, 'bairrosuper':u_bairro, 'cidadesuper':u_cidade, 'ufsuper':u_uf, 'acao':u_acao},
				dataType:'json',
				success: function(texto) { 
				    
					if(texto == 'sucesso'){
					    
						$("#modal-aviso").modal({
							show: true
						});
						
						
					};
				}
			}); 
				
	});
	//Fazer recarregar página ao fechar modal
	$('body').on('click', '#fecharmodal', function(e){
		e.preventDefault();
		window.location.href='cadastrosupermercado.php';
		
	});
</script>
<footer class="bg-secondary p-3 corfundo">
	<ul class="list menu"><h6 class="text-light">Atendimento ao cliente</h6>
		<li class="list-item"><a href="#" class="text-white-50" data-toggle="modal" data-target="#modal-contato">Fale com a gente</a></li>
		<li class="list-item"><a href="#" class="text-white-50">Formas de pagamento</a></li>
		<li class="list-item"><a href="#" class="text-white-50">Como Comprar</a></li>
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


</body>
</html>