 <?php
	//CONEXAO BD
	define('BD_HOST', 'localhost');
	define('BD_USER', 'root'); 
	define('BD_PASS', 'rootroot'); 
	define('BD_NAME', 'xcrud'); 
	
	mysql_connect(BD_HOST, BD_USER, BD_PASS);
	mysql_select_db(BD_NAME);
?>
