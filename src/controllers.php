<?php
/**
 * Created by PhpStorm.
 * User: Saito88
 * Date: 20.11.2017
 * Time: 22:43
 */

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

$path = __DIR__.'/Controllers/';

$files = scandir($path);

foreach($files as $file) {
    if(substr($file,-3) === 'php') {
        include_once $path.$file;
    }
}