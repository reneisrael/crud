 <?php
	//CONEXAO BD
	define('HOST', 'localhost');
	define('BD_USER', 'root'); 
	define('BD_PASS', 'rootroot'); 
	define('BD_NAME', 'users'); 
	
	mysql_connect(HOST, BD_USER, BD_PASS);
	mysql_select_db(BD_NAME);
?>