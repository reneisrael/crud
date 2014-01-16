<<<<<<< HEAD
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerName,phone,city,country'); // columns in grid
    $xcrud->fields('customerName,creditLimit,salesRepEmployeeNumber'); // fields in details
    echo $xcrud->render();
=======
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerName,phone,city,country'); // columns in grid
    $xcrud->fields('customerName,creditLimit,salesRepEmployeeNumber'); // fields in details
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>