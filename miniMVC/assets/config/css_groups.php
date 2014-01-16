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
 * This is the config array for css files to concatenate and minify
 */
return array(
	/*-----
			Css
					-----*/
	'css' => array(
		'message.css'
	),

	/*
		For each group create an array like so

		'my_group' => [
			'path/to/css/file1.css',
			'path/to/css/file2.css'
		],
	*/
);
// End of css_groups.php