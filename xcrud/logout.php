<?php
session_start(); //inicia a sess�o que foi aberta

session_destroy(); //destrui a sess�o

session_unset(); //limpa as variaveis globais das sess�es

echo "<script>alert('Voc� saiu!');top.location.href='index.php';</script>";
?> 