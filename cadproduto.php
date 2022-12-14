<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!--ICONS BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- CSS Local -->
  <link rel="stylesheet" type="text/css" href="src/stylepreco.css">
    <!--JavaScript BootStrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil+One&display=swap" rel="stylesheet">

<title>Preco Fácil</title>

</head>
<body>

	
		<a href="index.php">
				<img src="src/img/logoremove.png" height="75px" width="150px"></a>
		<div class="container">
			<div class="row justify-content-center m-4 borda-corespecialform">
				<div class="col-10">
					<form action="testecone.php" method="post" class="row g-2" >
						<h2>Cadastro de produtos</h2>
						<div class="borda-corespecial"></div>
						
						<div class="imagemdiv">
							<img id="imagemCard" src="src/img/semimagem.jpg" name="imagem" class="imagemCard">
						</div>
						<div class="form-group">
							<img id="preview" />
							<input type="file" class="form-control-file" id="imagemcad" accept="image/*" value="">
							<!-- <button class="btn mt-5 ml-4 botao-cor-especial" type="button" onclick="fncAnexar()">Anexar</button> -->
						</div>
		
						<div class="col-md-12">
							<label for="desc-produto" class="form-label">Descrição produto:</label>
							<input type="text" class="form-control" name="nomeproduto" id="desc-produto" placeholder="Descreva o produto" required list="browsers">
							<datalist id="browsers">
								<option value="Feijão">
								<option value="Arroz">
								<option value="Farinha">
								<option value="Açúcar">
								<option value="Macarrão">
								<option value="Biscoitos">
								<option value="Flocos de cuscuz">
								<option value="Óleo">
								<option value="Azeite">
								<option value="Extrato de tomate">
								<option value="Molhos">
								<option value="Vinagre">
								<option value="Sal">
								<option value="Café">
								<option value="Chá">
								<option value="Leite">
								<option value="Maionese">
								<option value="Mostarda">
								<option value="Ketchup">
								<option value="Creme de leite">
								<option value="Leite condensado">
								<option value="Atum">
								<option value="Sardinha">
								<option value="Milho de pipoca">
							</datalist>
						</div>
						<div class="col-md-6">
							<label for="marca" class="form-label">Marca:</label>
							<input type="text" class="form-control" name="marca" id="marca" placeholder="Digite a marca" required>
						</div>
						<div class="col-md-6">
							<label for="peso/ml" class="form-label">Medida:</label>
							<input type="number" class="form-control" name="medida" id="peso-lt" placeholder="kg/gr/un/lt/ml" required>
						</div>
						<div class="col-md-5">
							<label for="embalagem" class="form-label">Tipo de Medida:</label>
							<select name="tipomedida" id="embalagem">
								<option selected>Escolha...</option>
								<option value="Lt">Litro</option>
								<option value="Gr">Grama</option>
								<option value="Kg">Quilo</option>
								<option value="Un">Unidade</option>
								<option value="Ml">Miligramas</option>
								
							</select>
						</div>
						<div class="col-md-7">
							<label for="validade" class="form-label">Validade:</label>
							<input type="date" class="form-control" name="validade" id="validade">
						</div>
					
						<div class="col-md-12">
							<label for="fornecedor" class="form-label">Nome do fabricante:</label>
							<input type="text" class="form-control" name="fabricante" id="fabricante" placeholder="Digite o nome do fornecedor" required>
						</div>
						<div class="col-md-6">
							<label for="preco-custo" class="form-label">Preço:</label>
							<div class="input-group">
								<span class="input-group-text">R$</span>
								<input type="number" class="form-control" step=".01" name="preco" placeholder="Preço custo" required minlength="3">
							</div>
						</div>
						<!--onchange='location.href=this.value'-->
						<div class="col-md-12">
							<label for="fornecedor" class="form-label">Qual Supermercado consta essa Promoção?</label>
							<?php
								$conexao = mysqli_connect('localhost','root','','precofacil');
									if (!$conexao) die(mysqli_error($conexao));
									$sql="SELECT nome,codigo FROM supermercado";
									$busca = mysqli_query($conexao, $sql);
									//$linha = mysqli_fetch_assoc($busca);
								//$section = mysql_query("SELECT nome FROM usuario");
								echo "<select id='selectsuper' name='supermercado' class='form-select' aria-label='Supermercado'>";
								echo "<option selected>Selecione o supermercado</option>";
								while ($row = mysqli_fetch_assoc($busca))
								{
								
								
								echo "<option value='".$row["codigo"]."'>".$row["nome"]."</option>";
								
								echo "<hr>";
								echo "<option value='cadastrosupermercado.php'>Não achou o supermercado desejado?</option>";
								}
								echo "</select>";
							?>
						</div>
						<div class="col-12" id="btn">
							<input type="submit" class="btn botao-cor-especial" value="Cadastrar" id="cadastrar">
						</div>
					</form>
				</div>
			</div>
		</div>
	
</body>
</html>

<script>


	//function fncAnexar(){
		/*var input = document.getElementById('imagemcad').files;
		//var caminho = document.getElementsByClassName('imagemCard')[0].attributes.src.nodeValue;
		//console.log(document.querySelector("img"));
		const img = document.querySelector("#imagemCard");

		//console.log(img.getAttribute("src"));
		if (input.length > 0){
			nomeArquivo = input[0].name;
			console.log(input[0].name);
			//caminho = nomeArquivo;
			//var img = document.querySelector("img");
			img.setAttribute('src', 'nomeArquivo');
			console.log(nomeArquivo);
		}*/
		//console.log(input.files.name);
		var uploadfoto = document.getElementById('imagemcad');
		var fotopreview = document.getElementById('imagemCard');
		
		uploadfoto.addEventListener('change', function(e) {
			showThumbnail(this.files);
		});
		
		function showThumbnail(files) {
			if (files && files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
			fotopreview.src = e.target.result;
			}
				
				reader.readAsDataURL(files[0]);
				
			}
		}
		
	
	
	//};
       /*$('document').on('click', '#imagemcad', function(e){
		e.preventDefault();
			console.log("entrei");
		
                       var reader = new FileReader();
                       reader.onloadend = function() {
                               $("#preview").attr("src", reader.result);
                       }
                       reader.readAsDataURL(file);
               
       });
	   
*/


</script>