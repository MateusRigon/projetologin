<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- NavBrand logo -->
    <script src="https://kit.fontawesome.com/9e177e207c.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <title>Login de Usuário</title>
  </head>
  <body>
	<!-- Navbar -->
		<div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light mr-0">
	          	<span><i class="fas fa-users"></i></i></span>
	              	<div class="collapse navbar-collapse">
	                  	<ul class="navbar-nav ml-auto">
	                        	<li><a class="btn btn-outline-success" href="cadastropage.php">Cadastre-se</a></li>
	                  	</ul>
	                </div>
	      	</nav>

	      <!-- Divisão do conteúdo de formulário -->
			<div class="row mr-0">
				<div id="conteudo" class="col-6">
					<h1 class="display-4">Entrar</h1>
					<hr class="my-4">

					<!-- Formulário de login do usuário -->
						<div class="form-group">
							<form method="POST" action="login.php">
								<input type="text" name="login" placeholder="Usuário" required>
								<br><br>
								<input type="password" name="senha" placeholder="Senha" required>
								<br><br>
								<input type="submit" name="entrar" value="ENTRAR" class="btn btn-success btn-lg">
								<br><br>
								<p>Ainda não é inscrito? <a href="cadastropage.php">Cadastre-se!</a></p>
							</form>
						</div>
				</div>
					<!-- Imagem da página de login -->
						<div id="imagem" class="col-6"></div>
			</div>
		</div>
  
  </body>
</html>