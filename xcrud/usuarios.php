<?php
	session_start();
	include("functions.php");
	session_checker();
	
	$cabecalho_title = "Usuários";
    include('menu_cabecalho.php');
    $xcrud->table('usuarios');
?>
<body>
<?php include('menu_lateral_admin.php');?>
<div class="col-sm-9 col-md-9">
            <?php 
            	$xcrud->table_name('Usuários');
				$xcrud->label('usuarioNome','Nome');
				$xcrud->label('usuario','Usuário');
				$xcrud->label('cpf','CPF');
				$xcrud->label('cnpj','CNPJ');
				$xcrud->label('usuarioNivel','Nível usuário');
				$xcrud->label('dataUltimoLogin','Data último login');				
				//view tabela
				$xcrud->unset_csv();
				$xcrud->limit(20);                
				$xcrud->unset_remove();	
				$xcrud->columns('usuarioNome,email,usuario,usuarioNivel,dataCadastro,dataUltimoLogin,ativado'); // columns in grid
				//edit
				$xcrud->fields('senha,dataCadastro,dataUltimoLogin', true); //esconder campos
				echo $xcrud->render();
            ?>
        </div>
    </div>
</div>
<?php include('menu_rodape.php');?>
