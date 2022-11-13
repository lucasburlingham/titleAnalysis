<?php

require_once("functions/classes.php");


// Prompt user to install in new window
shell_exec("google-chrome --load-extension=" . $extension_dir . " >> /dev/null");