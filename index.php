<?php
/**
 * Created by PhpStorm.
 * User: Saito88
 * Date: 20.11.2017
 * Time: 22:35
 */

require_once __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/src/app.php';

require_once __DIR__.'/src/controllers.php';

$app['debug'] = true;
$app->run();