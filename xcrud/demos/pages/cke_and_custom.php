<<<<<<< HEAD
<?php
    Xcrud_config::$editor_url = dirname($_SERVER["SCRIPT_NAME"]).'/../editors/ckeditor/ckeditor.js'; // can be set in config
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    $xcrud->change_type('status','select','','On Hold,In Process,Resolved,Shipped,Disputed,Cancelled');
    $xcrud->change_type('orderDate','none');
    echo $xcrud->render();
=======
<?php
    Xcrud_config::$editor_url = dirname($_SERVER["SCRIPT_NAME"]).'/../editors/ckeditor/ckeditor.js'; // can be set in config
	$xcrud = Xcrud::get_instance();
    $xcrud->table('orders');
    $xcrud->change_type('status','select','','On Hold,In Process,Resolved,Shipped,Disputed,Cancelled');
    $xcrud->change_type('orderDate','none');
    echo $xcrud->render();
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
?>