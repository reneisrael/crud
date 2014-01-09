<?php
    $login_cookie = $_COOKIE['login'];
        if (isset($login_cookie)) {        
             echo"Bem-vindo, $login_cookie <br>";
        }else{
             echo"<br><a href='login.html'>Faça login</a><br>";
        }
?>