<?php

require_once("../config.php");


// Prompt user to install in new window
shell_exec("google-chrome --load-extension=" . $extension_dir);