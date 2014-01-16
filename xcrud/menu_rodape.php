<?php
    $url_face = '100incendio';
    $url_google = 'https://plus.google.com/u/0/103874553075989327577';
    $url_twitter = '100incendio';
?>

</body>
<footer class="rodape">
<nav class="container " role="navigation">
	<div class="navbar-header"> 
			</button> <a class="navbar-brand" href="#">Copyright  &copy;  <?php print date('Y'); echo ' - '.$site_name; ?></a>
	</div>
	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
		<ul class="nav navbar-nav navbar-left">
			<ul><a href="doc_termos_uso.php">TERMOS DE USO</a></ul>  
			<ul><a href="doc_privacidade.php">POLÍTICA DE PRIVACIDADE</a></ul>  
			<ul>CONTATO: <a href="form_contato.php"><?php echo $site_email; ?></a></ul>
		</ul>
		<ul class="nav navbar-nav navbar-right">
			<ul><a href="<?php echo $url_face; ?>">Facebook</a></ul>
			<ul><a href="<?php echo $url_twitter; ?>">Twitter</a></ul>
            <ul><a href="<?php echo $url_google; ?>">Google+</a></ul>
		</ul>
	</div>

</nav>	
</footer>
</html>
