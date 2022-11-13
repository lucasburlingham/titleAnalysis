<?php

require_once("functions/classes.php");

$server = new Server();
$php_version = $server->simplephpversion();

if (file_exists("/etc/php/$php_version/mods-available/pdo_sqlite.ini")) {
	echo "Please run this with superuser privilages:\n";
	echo "sudo apt install php-sqlite3\n";
	echo "Alternatively, you can install the php-sqlite3 package with your package manager.\n";
	echo "This is a REQUIRED dependancy.";
}

if (file_exists(shell_exec("which tree"))) {
	echo "Please run this with superuser privilages:\n";
	echo "sudo apt install tree\n";
	echo "Alternatively, you can install the tree package with your package manager.\n";
	echo "This is an OPTIONAL dependancy.";
}

if (file_exists(shell_exec("which google-chrome"))) {
	echo "Please run this with superuser privilages:\n";
	echo "sudo apt install tree\n";
	echo "Alternatively, you can install the tree package with your package manager.\n";
	echo "This is an OPTIONAL dependancy.";
} else if (file_exists(shell_exec("which chromium"))) {
	echo "Please run this with superuser privilages:\n";
	echo "sudo apt install chromium\n";
	echo "Alternatively, you can install the tree package with your package manager.\n";
	echo "This is an OPTIONAL dependancy.";
}


?>