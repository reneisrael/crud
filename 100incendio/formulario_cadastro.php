<body>
<?php 
	$cabecalho_title = "100 incendio";
	include("_menu_cabecalho.php");
?>


<div class="container">

        <div class="page-header">
            <h1>Registro de novo usu&aacute;rio</h1>
        </div>
        
        
    <div class="row-fluid">
        <div class="span12">
            <div class="span6">
                <div class="area"></div>
            </div>

            <div class="span6">
                <div class="area">
                    <form name="cadastro" method="post" action="cadastra.php">
                        
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
                                Eu concordo com todos os <a href="#">Termos de Servi&ccedil;os</a></label> 
                                <div class="form?actions" disabled>
                                	<input type="hidden" name="Submit" value="Enviar" />
                                	<button name="bt_registrar" class="btn btn-primary" type="submit" disabled>Registrar</button> 
                                </div>
                            </div>
                        </div>
                    

						
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("_menu_rodape.php");?>
</body>

