<body>
<?php 
	session_start();
	include("functions.php");
	session_checker();
	
	$cabecalho_title = "Meus locais";
	include("menu_cabecalho.php");

	
	//contatos crud
	require_once 'controller/ContactsController.php';
	
	$controller = new ContactsController();
	
	$controller->handleRequest();

	include("menu_rodape.php");?>

</body>
