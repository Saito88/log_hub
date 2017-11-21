<?php
/**
 * Created by PhpStorm.
 * User: Saito88
 * Date: 20.11.2017
 * Time: 22:44
 */

$app->get('/', function () use ($app) {
    return $app['twig']->render(basename(__FILE__, '.php').'.twig', array(
        'name' => 'Marcel',
    ));
});

