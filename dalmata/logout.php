<?php/*
 * Arquivo: logout.php
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Script de logout
 */?>
 
<?php
session_start(); //inicia a sess�o que foi aberta

session_destroy(); //destrui a sess�o

session_unset(); //limpa as variaveis globais das sess�es

echo "<script>alert('Voc&ecirc; saiu!');top.location.href='index.php';</script>";
?> 