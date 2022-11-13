<?php


require_once("../install/depends.php");
require_once("../functions/classes.php");

new SQLite3($db_path);

echo "Sqlitedb path: $db_path";