<?php

 $app->group('/form', function () use ($app) {
 	
 	$app->get('/list', function() use ($app) {
 		$app->contents['message'] = 'some list';
 	});

 	$app->post('/submit', function() use ($app) {
 		$app->contents['message'] = 'some submission';
 	});

 });