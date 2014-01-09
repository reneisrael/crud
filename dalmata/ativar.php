<body>
<?php 
	$cabecalho_title = "Ativa cadastro";
	include("_menu_cabecalho.php");
	
	include("config.php");

	$usuario_id = $_REQUEST['id'];
	$senha = $_REQUEST['code'];

	$sql = mysql_query("UPDATE usuarios SET ativado='1' WHERE usuario_id='{$usuario_id}' AND senha='{$senha}'");

	$sql_doublecheck = mysql_query("SELECT * FROM usuarios WHERE usuario_id='{$usuario_id}' AND senha='{$senha}' AND ativado='1'");
	$doublecheck = mysql_num_rows($sql_doublecheck);

	if($doublecheck == 0){
		$error = -1;
		$msg = "<strong>Sua conta n&atilde;o pode ser ativada! Tente novamente.</strong>";
	}
	elseif($doublecheck > 0){
		$error = 1;
		$msg = "<strong>Seu cadastro foi ativado com sucesso!</strong>";
	}
	
	include("form_login.php");

	include("_menu_rodape.php");
?>
</body>