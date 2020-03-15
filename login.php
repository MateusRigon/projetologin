<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <title>Hello, world!</title>
  </head>
  <body>

<div class="">
	<div class="row">
		<div id="conteudo" class="col-6">
			<h1 class="display-4">Entrar</h1>
			<hr class="my-4">
			
			<div class="form-group">
				<form method="POST" action=".php">
					<!-- <label for="user">Usuario</label> -->
					<input type="text" name="user" placeholder="Usuário" required>
					<br><br>
					<!-- <label id="sen" for="senha">Senha</label> -->
					<input type="password" name="senha" placeholder="Senha" required>
					<br><br>
					<input type="submit" name="" value="ENTRAR" class="btn btn-success btn-lg">
					<br><br>
					<p>Ainda não é inscrito? <a href="cadastro.php">Cadastre-se!</a></p>
					
				</form>
			</div>
		</div>
		<div id="imagem" class="col-6"></div>
	</div>
</div>
  

  











  </body>
</html>