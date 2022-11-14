<?php


include_once("../functions/classes.php");

$server = new Extension;
$version = $server->version();


$body = <<<"JSON"
{
	"manifest_version": 3,
	"name": "Title Analysis Worker",
	"version": "$version",
	"description": "Sends page titles to a Title Analysis backend",
	"content_scripts": [
		{
			"js": [
				"content.js"
			],
			"matches": [
				"<all_urls>"
			]
		}
	]
}
JSON;

echo $body;

?>