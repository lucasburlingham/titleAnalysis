all: 
	echo '```TEXT' > TREE.md
	tree >> TREE.md
	echo '```' >> TREE.md
	php install/install.php
	
install:
	php install/install.php

extension:
	echo ""

newdb:
	cat config.php | grep '$db_path' | sed -e 's/$db_path =//g' -e 's/"//g' -e 's/;//g'
	echo "CREATE TABLE titles (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, url_string TEXT NOT NULL, datestring DATETIME)" | sqlite3 titles.db