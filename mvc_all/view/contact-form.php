<body>
<?php 
	session_start();
	include("functions.php");
	session_checker();
	$cabecalho_title =  htmlentities($title);
	include("_menu_cabecalho.php");
?>

<div class="container">

<?php
	//  sucesso - verde
    if ($errors) {
            print '<div class=\"alert alert-danger\">';
            foreach ( $errors as $field => $error ) {
                print '<li>'.htmlentities($error).'</li>';
            }
            print '</div>';
        }
        if ($errors) echo "<div class=\"alert alert-success\">".htmlentities($error)."</div>";
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
            	<label class="control-label" for="address">Endere�o</label>
                	<div class="controls">
                    	<input class="form-control"  type="text" name="address" value="<?php print htmlentities($address) ?>" />
                    </div>
            </div> 
                        
            <input type="hidden" name="form-submitted" value="1" />
            <input type="submit" value="Submit" />
        </form>
     
</div>
     
</body>
