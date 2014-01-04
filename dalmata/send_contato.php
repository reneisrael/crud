<?php/*
 * Arquivo: send_contato.php
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Script de envio de msg de contato
 * Saída: email para contato@100incendio.com
 */?>

<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
   # header("Location: formulario_contato.php"); exit;
   include("form_contato.php");

	// send the user back to the form
	exit;
}
	
// get the posted data
$name = $_POST["contact_name"];
$email_address = $_POST["contact_email"];
$message = $_POST["contact_message"];
$email_string = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

// check that a name was entered
if (empty ($name))
    $msg = "Voc&ecirc; deve digitar seu nome";
    
// check that an email address was entered
elseif (empty ($email_address)) 
    $msg = "Voc&ecirc; deve digitar seu email";
    
// check for a valid email address
elseif (!preg_match($email_string, $email_address))
    $msg = "Voc&ecirc; deve digitar seu email v&aacute;lido";
    
// check that a message was entered
elseif (empty ($message))
    $msg = "Voc&ecirc; deve digitar sua mensagem.";
		
		
// check if an error was found - if there was, send the user back to the form
if (isset($msg)) {
	$error = -1;
	include("form_contato.php");
	exit;
    #header("Location: formulario_contato.php?e=".urlencode($error)); exit;
}

		
// write the email content
$email_content = "Nome: $name\n";
$email_content .= "Email: $email_address\n";
$email_content .= "Mensagem:\n\n$message";
	
// send the email
$envio = mail ("rafaela.vilela@gmail.com", "Nova Mensagem de Contato", $email_content);

	if($envio){
 		$error = 1;
		$msg = "Mensagem enviada. <br> Entraremos em contato em breve.  <br> <strong> Obrigado. </strong>";
		#header("Location: formulario_contato.php?s=".urlencode("Mensagem enviada. Entraremos em contato em breve. Obrigado.")); 
	} 
	else {
		$error = -1;
		$msg = "A mensagem não pode ser enviada";
 		#echo("Location: formulario_contato.php?e=".urlencode("A mensagem não pode ser enviada"));;
 	} #if-else envio
 	
	include("form_contato.php");

	// send the user back to the form
	exit;

?>
