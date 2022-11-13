<?php

include_once("/config.php");

$server = new Server;

$hostname = $server->hostname;
$protocol = $server->protocol;

$body = <<<"XML"
<?xml version='1.0' encoding='UTF-8'?>
<gupdate xmlns='http://www.google.com/update2/response' protocol='2.0'>
	<app appid='$extension_ID'>
		<updatecheck codebase='$protocol:///$hostname/$crx_path' version='$extension_ver' />
	</app>
</gupdate>
XML;

