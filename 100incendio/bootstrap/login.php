<?php
    include "config.php";
    $tabela  = "usuarios"; //o nome de sua tabela

    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);

    $connect = mysql_connect($host, $login_db, $senha_db); //conectamos ao mysql
    $db = mysql_select_db($database); //selecionamos o database escolhido


        if (isset($entrar)) {
            $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"
                    	<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');
                    	window.location.href='login.html';
                    	</script>";
                    die();
                }else{
                	<script language='javascript' type='text/javascript'>alert('Login e senha corretos...');
                    </script>";
                    setcookie("login",$login);
                    header("Location:index.html");
                }
        }
?>