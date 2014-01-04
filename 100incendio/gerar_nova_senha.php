<body>
<?php 
	$cabecalho_title = "100 incendio";
	include("_menu_cabecalho.php");

	include "config.php";

	$recupera = $_POST['recupera'];
	$email = $_POST['email'];

switch($recupera){
	case "recupera":
		recupera_senha($email);
		break;

	default:
		include "formulario_senha_perdida.php";
		break;
} #switch

function recupera_senha($email){
	
	// Checar se o email está vazio
	if(!isset($email)){
		$error = -1;
	
		$msg = "Voc&ecirc; esqueceu de preencher seu email.<br/> <strong>Use o email do seu cadastro.</strong>"; 

		include("formulario_senha_perdida.php");

		exit();
	}

	// Checar se o email informado está cadastrado
	$sql_check = mysql_query("SELECT * FROM usuarios WHERE email='{$email}'");
	$sql_check_num = mysql_num_rows($sql_check);

	if($sql_check_num == 0){
		$error = -1;
	
		$msg = "Este email n&atilde;o est&aacute; cadastrado. <br/> <strong> Use o email do seu cadastro.</strong>";

		include("formulario_senha_perdida.php");

		exit();
	}
	
	// Se tudo OK: gerar uma nova senha e enviar para o email do usuário!
	function makeRandomPassword(){
		$salt = "abchefghjkmnpqrstuvwxyz0123456789";
		srand((double)microtime()*1000000);

		$i = 0;

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
	$headers .= "From: 100incêndio.com <webmail@100incendio.com.br>"; //COLOQUE TEU EMAIL

	$subject = "Sua nova senha em 100incêndio.com.br";
	
    #=================================  msg: nova senha  ================================= 
	$message = "Olá, redefinimos sua senha.<br /><br />

		<strong>Nova Senha</strong>: {$senha_randomica}<br /><br />

		<a href='http://www.100incendio.com.br'>http://www.100incendio.com.br</a><br /><br />

		Obrigado!<br /><br />

		100incêndio.<br /><br /><br />

		Esta é uma mensagem automática, por favor não responda.<br />
		Em caso de dúvida entre em contato pelo email: contato@100incendio.com.br";
	#=================================  msg: nova senha  =================================
    
	$envio = mail($email, $subject, $message, $headers);

	//Se email enviado, redirecionar para formulario de login
	if ($envio) {
		$error = 1;
	
		$msg = "Sua nova senha foi gerada com sucesso e enviada para o seu email.<br />Por favor, verifique seu email!";

		include("formulario_login.php");
	} #envio
	
} #function recupera_senha

	 include("_menu_rodape.php");?>

</body>