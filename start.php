<?php

/**
 * Google API Client
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */
require_once __DIR__ . '/autoloader.php';

/**
 * Setup new Google Client
 * @return \Google_Client
 * @throws Exception
 */
function google() {

	static $client;

	if (isset($cient)) {
		return $client;
	}
	
	$key = elgg_get_plugin_setting('api_key', 'google_client');
	if (!$key) {
		throw new Exception('Please set up your Google API Key in plugin settings');
	}

	$site = elgg_get_site_entity();

	$client = new Google_Client();
	$client->setApplicationName($site->name);
	$client->setDeveloperKey($key);

	return $client;
}
