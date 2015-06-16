<?php

$app->get('/', function () use ($app) {
    $app->contents['message'] = 'Welcome to S Web Services. Please provide application token to use the API.';
});

$app->group('/api', function () use ($app) {

    // get API list
    $api_list = require(__DIR__ . DS .'api.php');
    
    // load API routes
    foreach ($api_list as $key => $value) {
        require_once DIR_API . DS . $key . '.php';
    }

});

$app->notFound( function () use ($app) {
	$app->contents = array(
		'status' => false,
		'message' => '<h1>404 Page Not Found</h1><p>The page you are looking for could not be found. Check the address bar to ensure your URL is spelled correctly.</p>'
	);
});