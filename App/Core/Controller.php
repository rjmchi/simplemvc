<?php
namespace App\Core;

class Controller {
	public function __construct() {

	}
	
	public function model($model) {
		$model = 'App\\Models\\' . $model;
		return new $model;
	}
	
	public function view($view, $data=[]) {
		require_once('../App/Views/'.$view.'.php');
	}
	
}