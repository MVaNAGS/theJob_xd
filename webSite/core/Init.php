<?php
session_start();

$GLOBALS['cfg'] = array(
	'mysql' => array( //MYSQL Connect data
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'dbName' => 'socialnetwork'
	),
	'session' => array(
		'name' => 'user',
		'age'
	)
);

spl_autoload_register(function($class){
	require_once 'classes/'. $class . '.php';
});