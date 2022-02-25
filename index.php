<?php

require_once __DIR__.'/vendor/autoload.php';

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

require_once __DIR__.'/application/config/config.php'; 
require_once __DIR__.'/core/classes/Controller.php';
require_once __DIR__.'/core/classes/Model.php';
require_once __DIR__.'/application/config/router.php';
 