<<<<<<< HEAD
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerName,city,creditLimit'); // specify only some columns
    $xcrud->subselect('Paid','SELECT SUM(amount) FROM payments WHERE customerNumber = {customerNumber}'); // other table
    $xcrud->subselect('Profit','{Paid}-{creditLimit}'); // current table
    $xcrud->sum('creditLimit,Paid,Profit'); // sum row(), receives data from full table (ignores pagination)
    echo $xcrud->render();
=======
<?php
	$xcrud = Xcrud::get_instance();
    $xcrud->table('customers');
    $xcrud->columns('customerName,city,creditLimit'); // specify only some columns
    $xcrud->subselect('Paid','SELECT SUM(amount) FROM payments WHERE customerNumber = {customerNumber}'); // other table
    $xcrud->subselect('Profit','{Paid}-{creditLimit}'); // current table
    $xcrud->sum('creditLimit,Paid,Profit'); // sum row(), receives data from full table (ignores pagination)
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>