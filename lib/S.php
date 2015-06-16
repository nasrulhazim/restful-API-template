<?php

class S extends \Slim\Slim {

	public $contents = [
		'status' => true,
		'message' => ''
	];

	public function error($message = 'Error occured') {
		$app->contents['status'] = false;
		$app->contents['message'] = $message;
		return false;
	}

	public function output() {
		echo json_encode($this->contents);
	}
}