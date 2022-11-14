<?php

define('__ROOT__', dirname(dirname(__FILE__)));
// include_once(__ROOT__ . '/install/depends.php');
include_once(__ROOT__ . '/functions/classes.php');

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: multipart/form-data');


if(isset($_POST['title']) && isset($_POST['url'])) {
	$title = $_POST['title'];
	$url = $_POST['url'];
	$db = new DB();
	$db->insert($title, $url, $db_path);
	http_response_code(200);
}

if(isset($_GET['count'])) {
	$db = new DB();
	$result = $db->count($title, $db_path);
	http_response_code(200);
	var_dump($result);
}

if(isset($_GET['totalcount'])) {
	$db = new DB();
	$result = $db->totalcount($db_path);
	http_response_code(200);
	var_dump($result);
}

