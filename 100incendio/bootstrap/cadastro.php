<?php
 
    include "config.php";
    $tabela  = "usuarios"; //o nome de sua tabela

    $login = $_POST['login'];
    $senha = md5($_POST['senha']);

    $connect = mysql_connect($host, $login_db, $senha_db); //conectamos ao mysql
    $db = mysql_select_db($database); //selecionamos o database escolhido


	$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
	$select = mysql_query($query_select,$connect);
	$array = mysql_fetch_array($select);
	$logarray = $array['login'];
 
    if($login == "" || $login == null){
        echo"<script language='javascript' type='text/javascript'>alert(mysql_error($connect));window.location.href='cadastro_form.html';</script>";
 
        }else{
            if($logarray == $login){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro_form.html';</script>";
                die();
 
            }else{
                $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro_form.html'</script>";
                }
            }
        }
?>
