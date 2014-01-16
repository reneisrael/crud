<body>
<?php 
	$cabecalho_title = "Nova senha";
	include("menu_cabecalho.php");

	include "config.php";

	$recupera = $_POST['recupera'];
	$email = $_POST['email'];

switch($recupera){
	case "recupera":
		recupera_senha($email);
		break;

	default:
		include "form_nova_senha.php";
		break;
} #switch

function recupera_senha($email){
	
	// Checar se o email está vazio
	if(!isset($email)){
		$error = -1;
	
		$msg = "Voc&ecirc; esqueceu de preencher seu email.<br/> <strong>Use o email do seu cadastro.</strong>"; 

		include("form_nova_senha.php");

		exit();
	}

	// Checar se o email informado está cadastrado
	$sql_check = mysql_query("SELECT * FROM usuarios WHERE email='{$email}'");
	$sql_check_num = mysql_num_rows($sql_check);

	if($sql_check_num == 0){
		$error = -1;
	
		$msg = "Este email n&atilde;o est&aacute; cadastrado. <br/> <strong> Use o email do seu cadastro.</strong>";

		include("form_nova_senha.php");

		exit();
	}
	
	// Se tudo OK: gerar uma nova senha e enviar para o email do usuário!
	function makeRandomPassword(){
		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;
		
		$pass = "";

		while ($i <= 7){
			$num = rand() % 33;
			$tmp = substr($salt, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}

	$senha_randomica = makeRandomPassword();

	$senha = md5($senha_randomica);

	$sql = mysql_query("UPDATE usuarios SET senha='{$senha}' WHERE email ='{$email}'");

	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: 100incendio <100incendio@100incendio.com.br>"; //COLOQUE TEU EMAIL

	$subject = "100incendio: Nova senha";
	
    #=================================  msg: nova senha  ================================= 
	$message = "Olá {$usuarioNome},<br />
		Redefinimos sua senha.<br /><br />

		<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

		Esta é uma mensagem automática, por favor não responda!<br />	
		Se você precisar de ajuda, por favor contate o administrador do site: contato@100incendio.com.br.<br />
		Obrigado!<br /> <br />
		<strong>100incêndio.com.br</strong> <br />
		<a href='http://www.100incendio.com.br'>http://www.100incendio.com.br</a><br />";
	#=================================  msg: nova senha  =================================
    
	$envio = mail($email, $subject, $message, $headers);

	//Se email enviado, redirecionar para formulario de login
	if ($envio) {
		$error = 1;
	
		$msg = "Sua nova senha foi gerada com sucesso e enviada para o seu email.<br />Por favor, verifique seu email!";

		include("form_login.php");
	} #envio
	
} #function recupera_senha

	 include("menu_rodape.php");?>

</body>
