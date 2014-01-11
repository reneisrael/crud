<body>
<?php 
	$cabecalho_title = "Cadastro";
	include("_menu_cabecalho.php");
?>

<div class="container">

<?php
	//  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
?>
	<div class="col-md-6 column">
    	<div class="page-header"><h1>Registro de novo usu&aacute;rio</h1></div>
            

                    <form name="cadastro" method="post" action="ctrl_cadastrar.php">
                        
                        <div class="control-group">
                            <label class="control-label" for="nome">Nome</label>
                            <div class="controls">
                                <input class="form-control" name="nome" type="text" id="nome" value="<?php echo $_POST['nome']; ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="sobrenome">Sobrenome</label>

                            <div class="controls">
                            	<input class="form-control" name="sobrenome" type="text" id="sobrenome" value="<?php echo $_POST['sobrenome']; ?>" />
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="email">E-mail</label>
                            <div class="controls">
                            	<input class="form-control" name="email" type="text" id="email" value="<?php echo $_POST['email']; ?>" />
                            </div>
                        </div>


						<div class="control-group">
                            <label class="control-label" for="info">Informa&ccedil;&otilde;es sobre sua(s) empresa(s)</label>
                            <div class="controls">
								<textarea class="form-control" name="info" id="info"><?php echo $_POST['info']; ?></textarea>
							</div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="usuario">Usu&aacute;rio</label>
                            <div class="controls">
                            	<input class="form-control" name="usuario" type="text" id="usuario" value="<?php echo $_POST['usuario']; ?>" />
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox"><input type="checkbox" onclick="
                                if (this.checked) {
                                	bt_registrar.disabled = false;
                                } if (! this.checked) {
                                  bt_registrar.disabled = true;
                                }
                                ">
                                Eu concordo com todos os <a href="doc_termos_uso.php">Termos de Uso</a> e a <a href="doc_privacidade.php">Pol&iacute;tica de Privacidade</a>.</label> 
                                <div class="form-actions">
                                	<input type="hidden" name="Submit" value="Enviar" />
                                	<button name="bt_registrar" class="btn btn-primary" type="submit" disabled>Registrar</button> 
                                </div>
                            </div>
                        </div>
                    
                  </form>
               
    </div>
    <div class="col-md-6 column">
    	
    </div>
</div>

<?php include("_menu_rodape.php");?>
</body>

