<body>
<?php 
	$cabecalho_title = "Nova senha";
	include("_menu_cabecalho.php");
?>

<div class="alert info">
  
<?php
	//  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
?>
            
<form name="form1" method="post" action="nova_senha.php">
	<div class="control-group">
    	<label class="control-label" for="email">Por favor digite o seu email que est&aacute; cadastrado em nosso banco de dados</label>
        <div class="controls">
 	       <input  class="form-control" type="text" name="email" id="email">
        </div>
    </div>
       <br>       
    <div class="form-actions">
        <input type="hidden" name="recupera" value="recupera">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>

</div>
<?php include("_menu_rodape.php");?>
</body>