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
 * Model template class
 */
class Welcome_Model extends miniMVC\Model{

	/**
	 * Initialize the model
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}
}

// End of welcome_model.php