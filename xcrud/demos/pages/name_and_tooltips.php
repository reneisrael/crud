<<<<<<< HEAD
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('payments');
    $xcrud->table_name('This is table name!','And this is table tooltip...');
    $xcrud->field_tooltip('checkNumber', 'Wow, check number? Really?');
    $xcrud->column_tooltip('customerNumber', 'Yeah! Column tooltip!');
    echo $xcrud->render();
=======
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('payments');
    $xcrud->table_name('This is table name!','And this is table tooltip...');
    $xcrud->field_tooltip('checkNumber', 'Wow, check number? Really?');
    $xcrud->column_tooltip('customerNumber', 'Yeah! Column tooltip!');
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>