<?php

require_once("../config.php");

class JsonFile {

	// Create body of JSON file
	function createBody($extension_dir, $extension_ver) {
	$return = <<<"JSON"
{
	"external_crx": "$extension_dir",
	"external_version": "$extension_ver"
}
JSON;
	return $return;
	}

	// Create filename (https://developer.chrome.com/docs/extensions/mv3/external_extensions/#preference-linux)
	function createFilename($extension_ID) {
		$return = $extension_ID . ".json";
		return $return;
	}
}



class Server{
	// $server = new Server;
	
	function hostname() {
		// $server->hostname
		$return = $_SERVER['HTTP_HOST'];
		return $return;
	}

	function protocol() {
		// $server->protocol
		// https://stackoverflow.com/a/4042980
		$return = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
		return $return;
	}

	
}