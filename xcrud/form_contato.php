<body>
<?php 
	$cabecalho_title = "Contato";
	include("menu_cabecalho.php");
?>

<div class="container">

<?php
	//  sucesso - verde
    if (@$error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if (@$error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
?>
	
        <div class="page-header">
            <h1>Contato</h1>
        </div>

        <form method="POST" action="send_contato.php" class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="input1">Nome</label>
                <div class="controls">
                    <input  class="form-control" type="text" name="contact_name" id="input1" placeholder="nome">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="contact_email">Email</label>
                <div class="controls">
                    <input  class="form-control" type="text" name="contact_email" id="input2" placeholder="email@email.com">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="contact_message">Mensagem</label>
                <div class="controls">
                    <textarea  class="form-control" name="contact_message" id="input3" rows="5" class="span5" placeholder="Mensagem"></textarea>
                </div>
            </div>
            <br>
            <div class="form-actions">
                <input type="hidden" name="save" value="contact">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
                                
        </form>
        
    </div>
    <?php include("menu_rodape.php");?>
</body>
