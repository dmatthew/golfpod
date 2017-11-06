<?php

// require_once('../vendor/autoload.php');
//
// // Load .env file to environment variables
// $dotenv = new Dotenv\Dotenv(dirname(__DIR__));
// $dotenv->load();
// define('CRAFT_ENVIRONMENT', getenv('CRAFT_ENVIRONMENT') ?: 'development');
//
// // Path to your craft/ folder
// $craftPath = '../craft';
//
// // Do not edit below this line
// defined('CRAFT_BASE_PATH') || define('CRAFT_BASE_PATH', realpath($craftPath));
//
// if (!is_dir(CRAFT_BASE_PATH.'/vendor')) {
//   exit('Could not find your vendor/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
// }
//
// require_once CRAFT_BASE_PATH.'/vendor/autoload.php';
// $app = require CRAFT_BASE_PATH.'/vendor/craftcms/cms/bootstrap/web.php';
// $app->run();


// Set path constants
define('CRAFT_BASE_PATH', dirname(__DIR__));
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH.'/vendor');
// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH.'/autoload.php';
// Load dotenv?
if (file_exists(CRAFT_BASE_PATH.'/.env')) {
    (new Dotenv\Dotenv(CRAFT_BASE_PATH))->load();
}
// Load and run Craft
define('CRAFT_ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');
$app = require CRAFT_VENDOR_PATH.'/craftcms/cms/bootstrap/web.php';
$app->run();
