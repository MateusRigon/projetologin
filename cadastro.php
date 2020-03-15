<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">

    <title>Página de Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-lg-12">

            <div class="jumbotron rounded-circle">
              <div id="conteudo">
              <h1 class="display-4">Cadastro</h1>
              <hr class="my-4">
            <div class="form-group">
              <form method="POST" action="processa.php" target="_self">
                  <!-- <label for="user">Usuário</label> -->
                  <input type="text" required="true" name="login" placeholder="Usuário" maxlength="30">
                  <br> <br>
                  <!-- <label id="senha"for="senha">Senha</label> -->
                  <input type="password" required="true" name="senha" placeholder="Senha" maxlength="15">
                  <br><br>
                  <input id="button" class="btn btn-success btn-lg" type="submit" value="CADASTRAR" name="">
              </form>

            </div>


    
            </div>

           </div>
          </div>
        </div>
    </div>









  </body>
</html>

