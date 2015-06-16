<?php
try {
	header("Access-Control-Allow-Origin: *");
	require 'vendor/autoload.php';
	require 'config/definitions.php';
	require 'config/database.php';
	require 'config/initialize.php';
} catch (Exception $e) {
	echo '{"error":{"text":'. 'Unable to start up the web service. ' . $e->getMessage() .'}}';
}