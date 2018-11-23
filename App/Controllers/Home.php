<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Models\Client;

class Home extends Controller {
	public function index($name = '') {
		$client = $this->model('Client');
		
		$c = Client::find(1);
		
		$this->view('home/welcome', ['client'=>$c]);
	}
}