<<<<<<< HEAD
<?php
require_once (rtrim(FCPATH, '\\') . '/xcrud/xcrud.php');
if (!function_exists('xcrud_get_instance'))
{
    function xcrud_get_instance($name = false)
    {
        return Xcrud::get_instance($name);
    }
}
=======
<?php
require_once (rtrim(FCPATH, '\\') . '/xcrud/xcrud.php');
if (!function_exists('xcrud_get_instance'))
{
    function xcrud_get_instance($name = false)
    {
        return Xcrud::get_instance($name);
    }
}
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
