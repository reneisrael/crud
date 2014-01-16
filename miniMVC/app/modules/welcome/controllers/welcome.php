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
 * Example Controller Class
 */
class welcome extends miniMVC\Controller {

	/**
	 * Initialize the constructor
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Default route for the controller
	 *
	 * @return void
	 */
	public function index()
	{
		$this->page->build_header();
		$output = $this->page->set_message('info', "This is just a test message");
		$this->page->build_footer();
	}

	/**
	 * welcome/php route
	 *
	 * @return void
	 */
	public function php()
	{
		ob_start();
		phpinfo();
		$output = ob_get_contents();
		ob_end_clean();

		$this->page->set_output($output);
	}
}

// End of welcome.php