<?php 

$app = new S();

$app->hook('slim.before', function () use ($app) {
    
});

$app->hook('slim.after', function () use ($app) {
    $app->output();
});

$app->response->header("Content-Type", "application/json; charset=utf-8");

require 'routes.php';

$app->run();