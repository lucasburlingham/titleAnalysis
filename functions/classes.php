<?php

// Global function file; To be included on all pages with:
// require_once("functions/classes.php");


require_once("config.php");
require_once("install/depends.php");

class JsonFile {
	// See (https://developer.chrome.com/docs/extensions/mv3/external_extensions/#preference-linux)
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

	
	// Create filename
	function createFilename($extension_ID) {
		$return = $extension_ID . ".json";
		return $return;
	}
}



class Server{
	// $server = new Server;
	
	function hostname() {
		// $server->hostname()
		$return = $_SERVER['HTTP_HOST'];
		return $return;
	}

	function protocol() {
		// $server->protocol()
		// https://stackoverflow.com/a/4042980
		$return = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
		return $return;
	}

	function simplePHPVersion() {
		$version = phpversion();
		$version = substr($version,0,3);
	}


}


class DB {

	function insert($title, $url) {
		$time = time();
		
		$db = new SQLite3($db_path);
		$db->exec("INSERT INTO foo (title, url_string, timestring) VALUES ($title, $url, $time)");
	}

	function DBPath() {
		return $db_path;
	}
}