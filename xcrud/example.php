<?php
    include('xcrud/xcrud.php');
    $xcrud = Xcrud::get_instance();
    $xcrud->table('usuarios');    
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Some page title</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css" />
    <link href="xcrud/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="http://xcrud.com/xcrud/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="http://xcrud.com/xcrud/plugins/jcrop/jquery.Jcrop.min.css" rel="stylesheet" type="text/css" />
<link href="http://xcrud.com/xcrud/plugins/timepicker/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css" />
<link href="http://xcrud.com/xcrud/themes/bootstrap/xcrud.css" rel="stylesheet" type="text/css" />
    
</head>
 
<body>
 
<?php
    echo $xcrud->render();
?>
 
</body>
</html>