<body>
<?php 
	session_start();
	include("functions.php");
	session_checker();
	
	$cabecalho_title = "Meus locais";
	include("_menu_cabecalho.php");

	
	//contatos crud
	require_once 'controller/ContactsController.php';
	
	$controller = new ContactsController();
	
	$controller->handleRequest();

	include("_menu_rodape.php");?>

</body>