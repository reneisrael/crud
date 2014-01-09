<body>
<?php 
	$cabecalho_title = "Login";
	include("_menu_cabecalho.php");
?>

<div class="alert info">
	<?php
    //  sucesso - verde
    if ($error == 1) echo "<div class=\"alert alert-success\">".@$msg."</div>";  
  	
    //  erro - vermelho
    if ($error == -1)  echo "<div class=\"alert alert-danger\">".@$msg."</div>"; 
	?>

	
    
    <div class="col-md-4 column"></div>
    <div class="col-md-4 column"></div>
    <div class="col-md-4 column">
   		<div class="page-header"><h1>Entrar</h1></div>
   		
		<form action="verifica_usuario.php" method="post" name="" id="">
			<div class="control-group">
				<label class="control-label" for="usuario">Usu&aacute;rio</label>
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
				<input name="entrar" value="login" type="hidden">
				<button type="submit" class="btn btn-primary btn-block"> Entrar</button>
	         </div>
		</form>
	</div>
</div>
</body>
