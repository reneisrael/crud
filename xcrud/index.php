<?php
	$cabecalho_title = "100incêndio";
    include('menu_cabecalho.php');
    $xcrud->table('products');
    $xcrud2 = Xcrud::get_instance();
    $xcrud2->table('consultation');
    $xcrud3 = Xcrud::get_instance();
    $xcrud3->table('customers');
?>
<body>
<?php include('menu_lateral.php');?>
<div class="col-sm-9 col-md-9">
	
	
            <div class="well">
                <h1>Produtos</h1>
            </div>
            
            <?php 

				//$xcrud->unset_edit();
				//$xcrud->unset_view();
				//$xcrud->unset_limitlist();
				//$xcrud->unset_numbers();
				//$xcrud->unset_pagination();
				//$xcrud->unset_print();
				//$xcrud->unset_search();
				//$xcrud->unset_sortable();	
				//$xcrud->unset_title();
				
				//view tabela
				$xcrud->unset_csv();
				$xcrud->limit(20);                
				$xcrud->unset_remove();			
				$xcrud->table_name('Produtos', 'Lista de produtos','icon-leaf');
				$xcrud->columns('productName,productLine,productScale'); // columns in grid
				$xcrud->label('productName','Nome');
				$xcrud->label('productLine','Linha');
				$xcrud->label('productScale','Escala');
				$xcrud->label('productVendor','Vendedor');
				$xcrud->label('productDescription','Descrição');
				
				
				//edit
				//$xcrud->fields('productCode', true); //esconder campos
				$xcrud->fields('productName,productLine,productScale', false, 'Info');
				$xcrud->fields('productVendor,productDescription', false, 'Personal');
				$xcrud->validation_required(array('productName' => 3, 'productLine' => 3, 'productVendor' => 3));
				$xcrud->validation_pattern(array('productName' => 'alpha', 'productLine' => 'alpha', 'productVendor' => 'alpha'));
				echo $xcrud->render();
				
				//     relation ( campo, tabela_alvo, id_alvo, nome_alvo, where_array, main_table, multi, concat_separator, tree, depend_field, depend_on )
				$xcrud2->relation('office','offices','officeCode','city');
				$xcrud2->relation('manager','employees','employeeNumber',array('firstName','lastName'),'','','',' ','','officeCode','office');
     
				$xcrud2->relation('country','meta_location','id','local_name','type = \'CO\'');
				$xcrud2->relation('region','meta_location','id','local_name','type = \'RE\'','','','','','in_location','country');
				$xcrud2->relation('city','meta_location','id','local_name','type = \'CI\'','','','','','in_location','region');
     
    
				echo $xcrud2->render('create');
				 $xcrud3->change_type('photo', 'image', false, array(
				'width' => 450,
				'path' => '../uploads/gallery',
				'thumbs' => array(array(
						'height' => 55,
						'width' => 120,
						'crop' => true,
						'marker' => '_th'))));
						
				echo $xcrud3->render();
            ?>
        </div>
    </div>
</div>
<?php $label = 'AVCB'; $value = '4.50'; include('gauge.php')?>
<?php include('menu_rodape.php');?>
