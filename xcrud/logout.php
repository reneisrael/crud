<?php
session_start(); //inicia a sessão que foi aberta

session_destroy(); //destrui a sessão

session_unset(); //limpa as variaveis globais das sessões

echo "<script>alert('Você saiu!');top.location.href='index.php';</script>";
?> 