<body>
<?php include("_menu_cabecalho.php");?>
<div class="container">

     <div class="col-md-6 column">
     </div>
	 <div class="col-md-6 column">
    	<div class="page-header"><h1>Cadastro novo local</h1></div>
        <?php 
        if (@$errors) {
        	foreach ( $errors as $field => $error ) {
        		echo "<div class=\"alert alert-warning\">".htmlentities($error)."</div>";
        	}
        }
        ?>
        <form method="POST" action="">
			<div class="control-group">
            	<label class="control-label" for="name">Nome</label>
                	<div class="controls">
                    	<input class="form-control"  type="text" name="name" value="<?php print htmlentities($name) ?>" />
                    </div>
            </div>
                        
            <div class="control-group">
            	<label class="control-label" for="phone">Telefone</label>
                	<div class="controls">
                    	<input class="form-control"  type="text" name="phone" value="<?php print htmlentities($phone) ?>" />
                    </div>
            </div>       
            
            <div class="control-group">
            	<label class="control-label" for="email">Email</label>
                	<div class="controls">
                    	<input class="form-control"  type="text" name="email" value="<?php print htmlentities($email) ?>" />
                    </div>
            </div> 
            
            <div class="control-group">
            	<label class="control-label" for="address">Endere&ccedil;o</label>
                	<div class="controls">
                    	<input class="form-control"  type="text" name="address" value="<?php print htmlentities($address) ?>" />
                    </div>
            </div> 
            <br/>
            <div class="form-actions">
            	<input type="hidden" name="form-submitted" value="1" />
            	<button class="btn btn-primary" type="submit" btn-block">Salvar</button> 
            </div>
        </form>
     </div>

</div>     
</body>

