/*
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Script de alerta
 * Campos do form: email
 * Include: _msg_erro.php
 */
 
<?php
/*erros  -2=AVISO -1=PERIGO / 0=ALERTA / 1=SUCESSO */ 
    //  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  
  	//  info - azul
    if ($error == 0)  echo "<div class=\"alert alert-info\">".@$msg."</div>"; 
    
    //  perigo - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
    
    // aviso - laranja
    if ($error == -2)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
/*erros*/
?>