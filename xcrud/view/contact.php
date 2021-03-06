<body>
<div class="container">

        <h1><?php print $contact->name; ?></h1>
        <div>
            <label class="control-label">Nome: </label> <?php print $contact->phone; ?>
        </div>
        <div>
            <label class="control-label">Email: </label> <?php print $contact->email; ?>
        </div>
        <div>
            <label class="control-label">Endere&ccedil;o: </label> <?php print $contact->address; ?>
        </div>

        <div class="page-header"><h1>Medidas de Seguran&ccedil;a</h1></div>

			<p>Cadastre as medidas necessárias conforme o Decreto N. 56.819 (de 10 de março de 2011, que institui o Regulamento de Segurança contra Incêndio das edificações e áreas de risco no Estado de São Paulo) e as Instruções Técnicas do Corpo de Bombeiros da PM do Estado de São Paulo.</p>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/basico/ms0-ctrlmat.jpg">
								<div class="caption">
									<div class="quadro-header">Controle de Materiais de Acabamento</div>
									<p>Medida1</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p></div></div></div>
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/basico/ms0-saida.jpg">
								<div class="caption">
									<div class="quadro-header">Saídas de Emergência</div>
									<p>Medida2</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p></div></div></div>
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/lotacao/50/ms0-ilum.jpg">
								<div class="caption">
									<div class="quadro-header">Iluminação de Emergência</div>
									<p>Medida3</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="row">
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/basico/ms0-sinal.jpg">
								<div class="caption">
									<div class="quadro-header">Sinalização</div>
									<p>Medida4</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/basico/ms0-ext.jpg">
								<div class="caption">
									<div class="quadro-header">Extintores</div>
									<p>Medida5</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="thumbnail"><img alt="300x200" src="img/ms/lotacao/100/ms0-brig.jpg">
								<div class="caption">
									<div class="quadro-header">Brigada de Incêndio</div>
									<p>Medida6</p>
									<p><a class="btn btn-block btn-primary" href="#">Ver</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>       
</div>
</body>
