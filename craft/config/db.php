<?php

/**
 * Database Configuration
 *
 * All of your system's database configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/db.php
 */
 $sqlInit  = "SET SESSION sql_mode='";
 $sqlInit .= "STRICT_TRANS_TABLES,";
 $sqlInit .= "NO_ZERO_IN_DATE,";
 $sqlInit .= "NO_ZERO_DATE,";
 $sqlInit .= "ERROR_FOR_DIVISION_BY_ZERO,";
 $sqlInit .= "NO_AUTO_CREATE_USER,";
 $sqlInit .= "NO_ENGINE_SUBSTITUTION';";

return array(

	'driver' => getenv('DB_DRIVER') ?: 'mysql',

	// The database server name or IP address. Usually this is 'localhost' or '127.0.0.1'.
	'server' => getenv('DB_SERVER'),

	// The name of the database to select.
	'database' => getenv('DB_DATABASE'),

	'port' => getenv('DB_PORT'),

	// The database username to connect with.
	'user' => getenv('DB_USER'),

	// The database password to connect with.
	'password' => getenv('DB_PASSWORD'),

	// The prefix to use when naming tables. This can be no more than 5 characters.
	'tablePrefix' => getenv('DB_TABLE_PREFIX') ?: '',

	'initSQLs'      => [$sqlInit],

);
