<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver' => 'mysql',
	'host'=>'localhost',
	'username'=>'root',
	'password' =>'kether1330',
	'database' => 'rjmilano_rjmchicago',
	'charset' =>'utf8',
	'collation'=> 'utf8_unicode_ci',
	'prefix' =>''
]);

$capsule->bootEloquent();
