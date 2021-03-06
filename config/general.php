<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

	// Base site URL
	'siteUrl' => getenv('CRAFT_SITE_URL'),

	// Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
	'environmentVariables' => array(),

	// Default Week Start Day (0 = Sunday, 1 = Monday...)
	'defaultWeekStartDay' => 0,

	// Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
	'enableCsrfProtection' => true,

	// Whether "index.php" should be visible in URLs (true, false, "auto")
	'omitScriptNameInUrls' => 'true',

	// Control Panel trigger word
	'cpTrigger' => getenv('CRAFT_CP_TRIGGER'),

	// Dev Mode (see https://craftcms.com/support/dev-mode)
	'devMode' => getenv('CRAFT_ENVIRONMENT') == 'development' ? true : false,

	'securityKey' => getenv('CRAFT_SECURITY_KEY')

);
