<?php
// HTTP
define('HTTP_SERVER', 'http://185mg32215.iask.in:30599/test/opencart3.0.2.0/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://185mg32215.iask.in:30599/test/opencart3.0.2.0/upload/');

// DIR
define('DIR_ROOT','Z:/test/opencart3.0.2.0/upload/');
define('DIR_APPLICATION', DIR_ROOT . 'catalog/');
define('DIR_SYSTEM', DIR_ROOT .'system/');
define('DIR_IMAGE', DIR_ROOT . 'image/');
define('DIR_STORAGE', DIR_ROOT . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'myopencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');