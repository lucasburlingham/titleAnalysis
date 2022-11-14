<?php

// Global function file; To be included on all pages with:
// define('__ROOT__', dirname(dirname(__FILE__)));
// include_once(__ROOT__ . '/install/depends.php');
// include_once(__ROOT__ . '/functions/classes.php');

define('__ROOT__', dirname(dirname(__FILE__)));
include_once(__ROOT__ . '/config.php');
include_once(__ROOT__ . '/install/depends.php');

$db_path = __ROOT__ . "/titles.db";


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
	
	function insert($title, $url, $db_path) {
		$db = new SQLite3($db_path);

		$time = time();
		$statement = 'INSERT INTO titles (title, url_string, datestring) VALUES (\'' . $title . '\',\'' . $url . '\',' . $time . ')';
		$result = $db->exec($statement);
		return $result;
	}

	function dbpath($db_path) {
		return $db_path;
	}

	function count($title, $db_path) {
	
		$db = new SQLite3($db_path);
		$return = $db->query("SELECT COUNT(*) FROM titles WHERE title=$title");
		return $return;
	}

	function totalcount($db_path) {
	
		$db = new SQLite3($db_path);
		$return = $db->query("SELECT last_insert_rowid()");
		return var_dump($return);
	}
}


class Extension {

	function version($extension_ver) {
		$return = $extension_ver;
		return $return;
	}

	function id($extension_ID) {
		$return = $extension_ID;
		return $return;
	}
}