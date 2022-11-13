all: 
	tree > TREE.md
	php install/install.php
	
install:
	php install/install.php

extension:
	echo ""

newdb:
	cat config.php | grep '$db_path' | sed -e 's/$db_path =//g' -e 's/"//g' -e 's/;//g'
	echo "CREATE TABLE titles (title TEXT, url_string, TEXT, datestring, DATETIME)" | sqlite3 titles.db