<?php

use App\App;
use App\Database\DBconntion;
use App\Database\qureyBulider;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require "vendor/autoload.php";


App::set('config', require 'config.php');

$log = new Logger('php-basics');
$log->pushHandler(new StreamHandler('queries.log',Logger::INFO));

qureyBulider::make(
    DBconntion::make(App::get('config')['database'])


);
?>