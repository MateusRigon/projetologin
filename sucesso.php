<?php 
    //Mensagem de bem-vindo caso efetua o login com sucesso
 	$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie!";
    }
 ?>