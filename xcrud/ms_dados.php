
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bootstrap 3, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div class="container">
    <div class="row clearfix">
    	<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">100 incêndio</a></div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul></li>
                            <li><a href="#">Relatórios</a></li>
					</ul>
					<form class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input class="form-control" type="text"></div> 
						<button type="submit" class="btn btn-default">Buscar</button>
					</form>
					</div></nav>
            <br>
            <br>                
			<br>       
            <div class="row clearfix">
				<div class="col-md-6 column"></div>
				<div class="col-md-6 column"></div></div>
			<h3>Medidas de Segurança &gt;&gt;</h3>
			<div class="row clearfix">
				<div class="col-md-4 column">
					<div class="row clearfix">
						<div class="col-md-2 column">&nbsp;</div>
						<div class="col-md-8 column"><img alt="140x140" src="http://lorempixel.com/140/140/" class="img-thumbnail">
							<h3 class="text-center">Label</h3></div>
						<div class="col-md-2 column">&nbsp;</div></div>
					<div class="row clearfix">
						<div class="col-md-2 column">&nbsp;</div>
						<div class="col-md-8 column">
							<div class="alert alert-dismissable alert-info"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Alert!</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a></div></div>
						<div class="col-md-2 column">&nbsp;</div></div>
					<div class="row clearfix">
						<div class="col-md-2 column">&nbsp;</div>
						<div class="col-md-8 column">
							<div class="alert alert-success alert-dismissable"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Alert!</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a></div></div>
						<div class="col-md-2 column">&nbsp;</div></div>
					<div class="row clearfix">
						<div class="col-md-2 column">&nbsp;</div>
						<div class="col-md-8 column">
							<div class="alert alert-dismissable alert-warning"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Alert!</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a></div></div>
						<div class="col-md-2 column">&nbsp;</div></div>
					<div class="row clearfix">
						<div class="col-md-2 column">&nbsp;</div>
						<div class="col-md-8 column">
							<div class="alert alert-dismissable alert-danger"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Alert!</h4> <strong>Warning!</strong> Best check yo self, you're not looking too good. <a href="#" class="alert-link">alert link</a></div></div>
						<div class="col-md-2 column">&nbsp;</div></div></div>
				<div class="col-md-8 column">
					<div class="row clearfix">
						<div class="col-md-12 column">
							<h3>Lista</h3> 
							<button type="button" class="btn btn-primary">Novo</button>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Item</th>
										<th>Data</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>TB - Monthly</td>
										<td>01/04/2012</td>
										<td>Default</td>
									</tr>
									<tr class="active">
										<td>1</td>
										<td>TB - Monthly</td>
										<td>01/04/2012</td>
										<td>Approved</td>
									</tr>
									<tr class="success">
										<td>2</td>
										<td>TB - Monthly</td>
										<td>02/04/2012</td>
										<td>Declined</td>
									</tr>
									<tr class="warning">
										<td>3</td>
										<td>TB - Monthly</td>
										<td>03/04/2012</td>
										<td>Pending</td>
									</tr>
									<tr class="danger">
										<td>4</td>
										<td>TB - Monthly</td>
										<td>04/04/2012</td>
										<td>Call in to confirm</td>
									</tr>
								</tbody>
							</table></div></div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<h3>Cadastro</h3>
							<div class="alert alert-dismissable alert-warning"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Atenção! Cadastro não salvo.</h4> <strong>Aviso:</strong> preencha todos os campos antes de salvar.</div>
							<form role="form">
								<div class="form-group"> 
									<label for="exampleInputEmail1">Email address</label>
									<input class="form-control" id="exampleInputEmail1" type="email"></div>
								<div class="form-group"> 
									<label for="exampleInputPassword1">Password</label>
									<input class="form-control" id="exampleInputPassword1" type="password"></div>
								<div class="form-group"> 
									<label for="exampleInputFile">File input</label>
									<input id="exampleInputFile" type="file">
									<p class="help-block">Example block-level help text here.</p></div>
								<div class="checkbox"> 
									<label>
										<input type="checkbox"> Check me out</label></div> 
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
							<div class="row clearfix">
								<div class="col-md-6 column">&nbsp;</div>
								<div class="col-md-1 column">&nbsp;</div>
								<div class="col-md-2 column"> 
									<button type="button" class="btn btn-block btn-danger">Cancelar</button></div>
								<div class="col-md-1 column">&nbsp;</div>
								<div class="col-md-2 column"> 
									<button type="button" class="btn btn-primary btn-block">Salvar</button></div></div></div></div>
					<div class="row clearfix">
						<div class="col-md-12 column">
							<h3>Dados cadastrados</h3>
							<div class="alert alert-success alert-dismissable"> 
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								<h4>Cadastro salvo com sucesso!</h4> <strong>Aviso:</strong> Cadastre agora.</div>
							<ol>
								<li>Nome:</li>
								<li>Email:</li>
							</ol></div></div>
					<div class="row clearfix">
						<div class="col-md-3 column"> 
							<button type="button" class="btn btn-default btn-block">Voltar</button></div>
						<div class="col-md-1 column">&nbsp;</div>
						<div class="col-md-2 column"> 
							<button type="button" class="btn btn-primary btn-block">Novo</button></div>
						<div class="col-md-1 column">&nbsp;</div>
						<div class="col-md-2 column"> 
							<button type="button" class="btn btn-block btn-warning">Editar</button></div>
						<div class="col-md-1 column">&nbsp;</div>
						<div class="col-md-2 column"> 
							<button type="button" class="btn btn-info btn-block">Próximo</button></div></div></div></div></div></div>
	<div class="row clearfix">
		<div class="col-md-12 column"> 
            <br>
			<address> <strong>© 100incêndio 2014.</strong><br>
			</address>                        
            <br>
			<br>
            <br>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">100 incêndio</a></div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
                        <li><a href="https://plus.google.com/u/0/103874553075989327577">Google+</a></li>
					</ul></div></nav></div></div></div>

</body>
</html>