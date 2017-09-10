<?php

require_once('../vendor/autoload.php');

// Load .env file to environment variables
$dotenv = new Dotenv\Dotenv(dirname(__DIR__));
$dotenv->load();
define('CRAFT_ENVIRONMENT', getenv('CRAFT_ENVIRONMENT') ?: 'development');

// Path to your craft/ folder
$craftPath = '../craft';

// Do not edit below this line
$path = rtrim($craftPath, '/').'/app/index.php';

if (!is_file($path))
{
	if (function_exists('http_response_code'))
	{
		http_response_code(503);
	}

	exit('Could not find your craft/ folder. Please ensure that <strong><code>$craftPath</code></strong> is set correctly in '.__FILE__);
}

require_once $path;
