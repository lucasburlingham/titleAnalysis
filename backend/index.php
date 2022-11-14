<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/install/depends.php');
require_once(__ROOT__ . '/functions/classes.php');



if(isset($_POST['title']) && isset($_POST['url'])) {
	$title = $_POST['title'];
	$db = new DB();
	$db->insert($title, $url);
	http_response_code(200);
} else {
	http_response_code(406);
}

if(isset($_GET['count'])) {
	$db = new DB();
	$db->count($title);
	http_response_code(200);
} else {
	http_response_code(406);
}

if(isset($_GET['totalcount'])) {
	$db = new DB();
	$db->totalcount();
	http_response_code(200);
} else {
	http_response_code(406);
}

