<?php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'grupinis');

// aprrot wil be used when we need absloute path to our app dir
define('APPROOT', dirname(dirname(__FILE__)));

// URL ROOT will be the path in the url
define('URLROOT', 'http://localhost/grupinis');

// Site name 
define('SITENAME', 'Grupinis');


// need to change .htaccess in public
// RewriteBase /__YOUR_SITE_DIR__/public
// replace  __YOUR_SITE_DIR__ with root dir name of your site 
