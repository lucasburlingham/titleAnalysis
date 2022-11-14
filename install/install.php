<?php

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__ . '/functions/classes.php');

echo "Please allow extension to be installed in the window that will open in less than 5 seconds...";
// Prompt user to install in new window
shell_exec("google-chrome --load-extension=" . $extension_dir . " >> /dev/null");

