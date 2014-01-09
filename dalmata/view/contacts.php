<body>
    <div class="container">
    
	    <div class="page-header"><h1>Meus Locais</h1></div>
	
	    <h5>Ordenar por:                
	    	<a href="?orderby=name">Nome</a> | 
	        <a href="?orderby=phone">Telefone</a> | 
	        <a href="?orderby=email">Email</a> | 
	        <a href="?orderby=address">Endere&ccedil;o</a>
    	</h5> 
    	
		<div class="row">
			<?php foreach ($contacts as $contact): ?>
		
			<div class="col-md-4">
				<div class="thumbnail"> 
					<div class="caption">
						<h3><a href="locais.php?op=show&id=<?php print $contact->id; ?>"><?php print htmlentities($contact->name); ?></a></h3>
						<p>Cidade: <?php print htmlentities($contact->address); ?></p>
						<p>CEP: XXXXX-000</p>
						<p>Telefone: <?php print htmlentities($contact->phone); ?></p>
						<p><a class="btn btn-block btn-primary" href="locais.php?op=show&id=<?php print $contact->id; ?>">Ver</a></p>
						</div>
				</div>
			</div>
			<?php endforeach; ?>
			<div class="col-md-4">
				<div align="center" class="thumbnail">
					<a href="locais.php?op=new"><img alt="300x150" src="img/add.jpg"/></a>
					<p><a class="btn btn-block btn-primary" href="locais.php?op=new">Adicionar</a></p>

				</div>
			</div>
		</div>
	</div>

    </body>
