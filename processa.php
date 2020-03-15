<?php 
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$db = "cadastro";
	$conexao = mysqli_connect($hostname,$user,$password,$db);
	
	if (!$conexao) {
		print "Falha na conexão com bando de dados!";
	}
	 
   
    $insert = "INSERT INTO usuarios(login,senha) VALUES ('$login','$senha')";  
	$salvar = mysqli_query($conexao,$insert);
         
        if($salvar){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.php'</script>";
        }
    

 ?>