<?php


require_once("functions/classes.php");

$server = new Server;

$hostname = $server->hostname();
$protocol = $server->protocol();

$body = <<<"XML"
<?xml version='1.0' encoding='UTF-8'?>
<gupdate xmlns='http://www.google.com/update2/response' protocol='2.0'>
	<app appid='$extension_ID'>
		<updatecheck codebase='$protocol://$hostname/$crx_path.crx' version='$extension_ver' />
	</app>
</gupdate>
XML;


file_put_contents("titleAnalysis_root/updates.xml", $body);