<?php/*
 * Arquivo: formulario_login.php
 * Criado por: Rafaela Vilela
 * Versao: v.1
 * Data: 01.jan.2014
 * Objetivo: Formulario para entrar do site
 * Campos do form: usuario e senha
 * Parametros: $error / $msg
 */?>
 
<body>
<div class="alert info">

<?php
	//  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
?>

<div class="page-header">
	<h1>Entrar</h1>
</div>
                       
<form action="verifica_usuario.php" method="post" name="" id="">
		<div class="control-group">
                <label class="control-label" for="email">Usu&aacute;rio</label>
                <div class="controls">
                    <input  class="form-control" type="text" name="usuario" id="usuario">
                </div>
         </div>
         
         <div class="control-group">
                <label class="control-label" for="senha">Senha</label>
                <div class="controls">
                    <input  class="form-control" type="password" name="senha" id="senha">
                </div>
         </div>
         
         <br>
         <div class="form-actions">
                <input type="hidden" name="Submit" value="Submit">
                <button type="submit" class="btn btn-primary">Entrar</button>
         </div>
</form>

</div>     
</body>
