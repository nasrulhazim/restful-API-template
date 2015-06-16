<?php

define('ROOT', dirname(dirname(__FILE__)) );
define('DS', DIRECTORY_SEPARATOR);
define('DIR_CONFIG', ROOT . DS . 'config');
define('DIR_CACHE', ROOT . DS . 'cache');
define('DIR_API', ROOT . DS . 'api');

define('IS_DEBUGGING', true);

define('TITLE', 'S Web Service');
define('BASE_URL','http://localhost/S/web/');
define('WEBSERVICE_URL','http://localhost/S/api/');

define('ADM',1); // Administrator