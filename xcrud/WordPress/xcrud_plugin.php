<?php /** f0ska xcrud wp plugin v.0.5 */
/*
Plugin Name: xCRUD loader
Author: f0ska
Author URI: http://codecanyon.net/user/f0ska
Version: 0.3
*/
function exec_xcrud($matches)
{
    try
    {
        eval('ob_start();' . $matches[1] . '$output = ob_get_contents();ob_end_clean();');
    }
    catch (exception $e)
    {
        return 'executing error';
    }
    return $output;
}
function prepare_xcrud_code($matches){
    return html_entity_decode($matches[1]);
}

function xcrud_wp($content)
{   
    $content = preg_replace_callback('/(<xcrud>.*<\/xcrud>)/Umus', 'prepare_xcrud_code', $content);
    $content = preg_replace_callback('/(\[xcrud\].*\[\/xcrud\])/Umus', 'prepare_xcrud_code', $content);
    $content = preg_replace_callback('/<xcrud>(.*)<\/xcrud>/Umus', 'exec_xcrud', $content);
    $content = preg_replace_callback('/\[xcrud\](.*)\[\/xcrud\]/Umus', 'exec_xcrud', $content);
    return $content;
}
function load_xcrud()
{
    require_once (dirname(__file__) . '/xcrud/xcrud.php');
    if (!session_id())
    { 
        if (!headers_sent())
        {
            session_name(Xcrud_config::$sess_name);
            session_cache_expire(Xcrud_config::$sess_expire);
            session_start();
        }
    }
}
add_filter('plugins_loaded', 'load_xcrud', 0);
remove_filter( 'the_content', 'wpautop');
add_filter('the_content', 'xcrud_wp', -1000); ?>