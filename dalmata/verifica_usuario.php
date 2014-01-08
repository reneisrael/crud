<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["entrar"]) || $_POST["entrar"] != "login") {
    header("Location: index.php"); exit;
}

session_start();  // Inicia a session

include "config.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if((!$usuario) || (!$senha)){
	$msg =  "Por favor, todos campos devem ser preenchidos! <br />";
	$error = -1;
	include("form_login.php");
	exit;
}
else{

	$senha = md5($senha);

	$sql = mysql_query("SELECT * FROM usuarios WHERE usuario='{$usuario}' AND senha='{$senha}' AND ativado='1'");
	$login_check = mysql_num_rows($sql);

	if($login_check > 0){

		while($row = mysql_fetch_array($sql)){

			foreach( $row AS $key => $val ){

				$$key = stripslashes( $val );

			} #foreach

			$_SESSION['usuario_id'] = $usuario_id;
			$_SESSION['nome'] = $nome;
			$_SESSION['sobrenome'] = $sobrenome;
			$_SESSION['email'] = $email;
			$_SESSION['nivel_usuario'] = $nivel_usuario;
		
			mysql_query("UPDATE usuarios SET data_ultimo_login = now() WHERE usuario_id ='{$usuario_id}'");

			header("Location: area_restrita.php");
		} #while

	} #if login_check
	else{
	    $msg = "Voc&ecirc; n&atilde;o pode logar-se! Este usu&aacute;rio e/ou senha n&atilde;o s&atilde;o v&aacute;lidos!<br /> Por favor tente novamente!<br />";
	    $error = -1;
	    include("form_login.php");
	    exit;
	}#if-else login_check
}

?>