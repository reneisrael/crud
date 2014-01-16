<<<<<<< HEAD
<?php
function publish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}
function unpublish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}

function old_style($postdata,$primary,$xcrud){
    $xcrud->set_exception('ban_reason','Lol!','error');
    $postdata->set('ban_reason','lalala');
    //return $postdata;
}
function new_style($postdata,$primary,$xcrud){
    
}
=======
<?php
function publish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'1\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}
function unpublish_action($xcrud)
{
    if ($xcrud->get('primary'))
    {
        $db = Xcrud_db::get_instance();
        $query = 'UPDATE base_fields SET `bool` = b\'0\' WHERE id = ' . (int)$xcrud->get('primary');
        $db->query($query);
    }
}

function old_style($postdata,$primary,$xcrud){
    $xcrud->set_exception('ban_reason','Lol!','error');
    $postdata->set('ban_reason','lalala');
    //return $postdata;
}

function new_style($postdata,$primary,$xcrud){
    
}
>>>>>>> 5caa52047a26555b6f56377f2cfd640af1be1198
