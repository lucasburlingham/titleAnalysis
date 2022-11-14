all: 
	echo '```TEXT' > docs/TREE.md
	tree >> docs/TREE.md
	echo '```' >> docs/TREE.md
	php install/install.php
	
install:
	php install/install.php

extension:
	google-chrome --pack-extension=$(pwd)/titleAnalysis_root --pack-extension-key=keys/titleAnalysis_root.pem

newdb:
	cat config.php | grep '$db_path' | sed -e 's/$db_path =//g' -e 's/"//g' -e 's/;//g'
	echo "CREATE TABLE titles (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT NOT NULL, url_string TEXT NOT NULL, datestring DATETIME)" | sqlite3 titles.db

devserver:
	php -S localhost:8800