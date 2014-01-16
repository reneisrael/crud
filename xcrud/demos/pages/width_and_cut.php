<<<<<<< HEAD
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('productlines');
    $xcrud->columns('productLine,textDescription');
    $xcrud->column_width('textDescription','80%');
    $xcrud->column_cut(250,'textDescription');
    echo $xcrud->render();
=======
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('productlines');
    $xcrud->columns('productLine,textDescription');
    $xcrud->column_width('textDescription','80%');
    $xcrud->column_cut(250,'textDescription');
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>