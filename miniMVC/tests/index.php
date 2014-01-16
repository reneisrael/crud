<?php

//Specify test environment
define('ENVIRONMENT', 'DEVELOPMENT');

//Include simpletest
require_once 'simpletest/autorun.php';

// Set the default paths
define('MM_SYS_PATH', '../sys/');
define('MM_MOD_PATH', '../modules/');
define('MM_APP_PATH', '../app/');

// Include db autoloader
require_once(MM_SYS_PATH . 'db/autoload.php');

// Include db tests
require_once(MM_SYS_PATH . 'db/tests/index.php');

//Include src files
require_once(MM_SYS_PATH . 'common.php');

//Include test files
require_once 'commonTest.php';

