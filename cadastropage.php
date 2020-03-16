<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- NavBrand logo -->
    <script src="https://kit.fontawesome.com/9e177e207c.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/cadastro.css">

    <title>Página de Cadastro</title>
  </head>
  <body>
    <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <span><i class="fas fa-user-plus"></i></span>
              <div class="collapse navbar-collapse">
                  <ul class="navbar-nav ml-auto">
                        <li><a class="btn btn-outline-success" href="loginpage.php">Login</a></li>
                  </ul>
              </div>
      </nav>
    
    <!--Container com jumbotron-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="jumbotron rounded-circle">
              <div id="conteudo">
                <h1 class="display-4">Cadastrar</h1>
                <hr class="my-4">

                <!-- Formulário de cadastro do usuário -->
                    <div class="form-group">
                      <form method="POST" action="cadastro.php">                  
                          <input type="text" required="true" name="login" placeholder="Usuário" maxlength="30">
                          <br> <br>                        
                          <input type="password" required="true" name="senha" placeholder="Senha" maxlength="15">
                          <br><br>
                          <input id="button" class="btn btn-success btn-lg" type="submit" value="PRONTO" name="">
                      </form>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>

