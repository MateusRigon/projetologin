<?php 
 	// Conexão com banco de dados MySQL
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$db = "cadastro";
	$conexao = mysqli_connect($hostname,$user,$password,$db);
	
	// Retorna um alerta caso ocorra erro na conexão
	if (!$conexao) {
		echo"Falha na conexão com banco de dados!";
	}
	 
    //Verifica o login no banco de dados  
	$pegalogin = mysqli_query($conexao, "SELECT * FROM usuarios WHERE (login = '$login')");

	if (mysqli_num_rows($pegalogin) == 1) {
		 //Retorna erro caso o login já exista 
		 echo"<script language='javascript' type='text/javascript'>
	     alert('Login já existente');window.location.
	     href='cadastropage.php'</script>";

	}else {
		//Cadastra login e senha no banco de dados
		$insert = "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')";  
		$salvar = mysqli_query($conexao,$insert);
		if ($salvar) {
		  echo"<script language='javascript' type='text/javascript'>
		    alert('Usuário cadastrado com sucesso!');window.location.
		     href='loginpage.php'</script>";
		}	
       }
       
 ?>