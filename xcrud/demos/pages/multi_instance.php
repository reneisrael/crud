<<<<<<< HEAD
<?php
	$xcrud1 = Xcrud::get_instance();
    $xcrud1->table('orders');
    echo $xcrud1->render();
    
    $xcrud2 = Xcrud::get_instance();
    $xcrud2->table('payments');
    echo $xcrud2->render();
=======
<?php
	$xcrud1 = Xcrud::get_instance();
    $xcrud1->table('orders');
    echo $xcrud1->render();
    
    $xcrud2 = Xcrud::get_instance();
    $xcrud2->table('payments');
    echo $xcrud2->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>