<?php
	include('http://localhost:100/xteste/site_config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="100incendio">    
    
    <title> <?php print $site_name.'. '.$cabecalho_title;?></title>
    
    <!-- Bootstrap for xcrud -->
    <link href="<?php echo $site_url; ?>/xcrud/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $site_url; ?>/xcrud/assets/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $site_url; ?>/xcrud/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $site_url; ?>/xcrud/plugins/jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $site_url; ?>/xcrud/plugins/timepicker/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $site_url; ?>/xcrud/themes/bootstrap/xcrud.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo $base_url; ?>/img/favicon.png">
    
    <!-- Bootstrap for html -->
    <!--link rel="stylesheet/less" href="<?php echo $site_url; ?>/less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="<?php echo $site_url; ?>/less/responsive.less" type="text/css" /-->
	<!--script src="<?php echo $site_url; ?>/js/less-1.3.3.min.js"></script-->
	<!--append ?#!watch? to the browser URL, then refresh the page. -->
	
	<link href="<?php echo $site_url; ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $site_url; ?>/css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo $site_url; ?>/js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $site_url; ?>/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $site_url; ?>/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $site_url; ?>/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo $site_url; ?>/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo $site_url; ?>/img/favicon.png">
  
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $site_url; ?>/js/scripts.js"></script>
	
</head>
 
<header class="container">

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
		<span class="sr-only"><?php print $nome_site;?></span>
		</button> 
		<a class="navbar-brand"><?php print $nome_site;?></a>
	</div>
				
		<?php 
       		if($_SESSION['nivel_usuario'] == 0) { ?>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home text-primary"></span> Home</a></li>
				</ul>
					       		
       			<ul class="nav navbar-nav">
       				<li><a href="sobre.php"><span class="glyphicon glyphicon-file text-primary"></span> Sobre</a></li>
                    <li><a href="form_contato.php"><span class="glyphicon glyphicon-envelope text-primary"></span> Contato</a></li>
               </ul>        
		       <ul class="nav navbar-nav navbar-right">
					<li><a href="form_cadastro.php">Registrar</a></li>
                  	<li class="divider-vertical"></li>
					<li class="dropdown">
						<a class="dropdown-toggle" href="#" data-toggle="dropdown">Entrar <strong class="caret"></strong></a>
				
						<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
							<form role="form" method="post" action="verifica_usuario.php" accept-charset="UTF-8" name="" id="">
								<div class="input-group">	
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									<input  class="form-control" placeholder="usuario" id="usuario" name="usuario" type="text">
								</div>
								
								<div class="input-group">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									<input class="form-control" placeholder="senha" id="senha" name="senha" type="password">
								</div>
								
								<a class="btn btn-link" href="form_nova_senha.php">Esqueci minha senha</a>
					
								<div class="form-actions">
									<input name="entrar" value="login" type="hidden">
									<button type="submit" class="btn btn-primary btn-block"> Entrar</button>
								</div>								
							</form>
						</div>
					</li>
				</ul>	
       <?php } ?>
		
	   <?php if($_SESSION['nivel_usuario'] == 1) { ?>
	   			
				<ul class="nav navbar-nav">
					<li><a href="area_restrita.php"><span class="glyphicon glyphicon-home text-primary"></span> Painel Principal</a></li>
				</ul>
					
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                    <span class="glyphicon glyphicon-user text-primary"> 
                    	<?php print $_SESSION['nome'];?><strong class="caret"></strong>
                    </span></a>
                        <ul class="dropdown-menu">
                            <li><a href="configuracoes.php"><span class="glyphicon glyphicon-cog text-primary"></span> Configurações</a></li>
                            <li><a href="form_suporte.php"><span class="glyphicon glyphicon-envelope text-primary"></span> Suporte</a></li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><span class="glyphicon glyphicon-off text-primary"></span> Sair</a></li>
                        </ul>
                    </li>
                </ul>
		<?php } ?>
	</div>		
</nav>
	<br/>
	<br/>
	<br/>
</header>
