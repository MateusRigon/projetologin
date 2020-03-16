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
		print "Falha na conexão com bando de dados!";
	}

    //Verifica no banco de dados se o login e senha estão cadastrados 
	$verifica = mysqli_query($conexao, "SELECT * FROM usuarios WHERE login ='$login' AND senha = '$senha'");

	if (mysqli_num_rows($verifica) <=0) {
		//Retorna erro caso login ou senha não estejam cadastrados no banco de dados
		echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='loginpage.php';</script>";
	} else {
		echo"<script language='javascript' type='text/javascript'>
        alert('Login efetuado com sucesso!');window.location
        .href='sucesso.php';</script>";
		setcookie("login",$login);
	}

 ?>