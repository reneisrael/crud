<?php
    $url_face = '100incendio';
    $url_google = 'https://plus.google.com/u/0/103874553075989327577';
    $url_twitter = '100incendio';
?>
<body>
	<br>
	<br>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="navbar-header"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
			<span class="sr-only"><?php echo $site_name; ?></span>
			</button> <a class="navbar-brand" href="#"><?php echo $site_name; ?></a></div>
	
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo $url_face; ?>">Facebook</a></li>
			<li><a href="<?php echo $url_twitter; ?>">Twitter</a></li>
            <li><a href="<?php echo $url_google; ?>">Google+</a></li>
		</ul>
	</div>
</nav>	
</body>
<footer class="rodape">
		<p>COPYRIGHT  &copy;  <?php print date('Y'); echo ' - '.$site_name; ?>:  soluções tecnologicas para prevenção e treinamento a emergências
		<br/>
			<a href="doc_termos_uso.php">TERMOS DE USO</a>   |  
			<a href="doc_privacidade.php">POLÍTICA DE PRIVACIDADE</a>   |  
			CONTATO: <a href="form_contato.php"><?php echo $site_email; ?></a>
		</p>                      
	<br>
	<br>
    <br>
</footer>
</html>
