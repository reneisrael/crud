<?php
/**
 * MiniMVC
 *
 * Convention-based micro-framework for PHP
 *
 * @package		miniMVC
 * @author 		Timothy J. Warren
 * @copyright	Copyright (c) 2011 - 2012
 * @link 		https://github.com/aviat4ion/miniMVC
 * @license 	http://philsturgeon.co.uk/code/dbad-license
 */

// --------------------------------------------------------------------------

/**
 * Database config file
 *
 * @package miniMVC
 * @subpackage App
 */

// --------------------------------------------------------------------------

$db_conf = array(
	'default' => array(
		'type' => '',
		'host' => 'localhost',
		'user' => 'root',
		'pass' => 'rootroot',
		'port' => '3306',
		'database'   => 'users',
		'file' => '',
	)
);

// End of db.php