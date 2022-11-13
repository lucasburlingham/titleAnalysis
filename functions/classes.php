<?php

// Global function file; To be included on all pages with:
// require_once("functions/classes.php");


require_once("config.php");
require_once("install/depends.php");

class JsonFile {
	// See (https://developer.chrome.com/docs/extensions/mv3/external_extensions/#preference-linux)
	// Create body of JSON file
	function createbody($extension_dir, $extension_ver) {
	$return = <<<"JSON"
{
	"external_crx": "$extension_dir",
	"external_version": "$extension_ver"
}
JSON;
	return $return;
	}

	
	// Create filename
	function createfilename($extension_ID) {
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

	function simplephpversion() {
		$version = phpversion();
		$version = substr($version,0,3);
	}


}


class DB {
	
	function insert($title, $url) {
		$db = new SQLite3($db_path, SQLITE3_OPEN_CREATE);
		$time = time();
		
		$db->exec("INSERT INTO titles (title, url_string, timestring) VALUES ($title, $url, $time)");
	}

	function dbpath() {
		return $db_path;
	}

	function count($title) {
	
		$db = new SQLite3($db_path);
		$return = $db->query("SELECT * FROM titles WHERE title=$title");
		return $return;
	}

	function totalcount() {
	
		$db = new SQLite3($db_path);
		$return = $db->query("SELECT last_insert_rowid()");
		return $return;
	}
}