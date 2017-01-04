<?php

class Db{

	protected $db;
	public function __construct() {
	    $config = \Yaf\Application::app()->getConfig();

		$db = new \Tool\Medoo([
		    'database_type' => 'mysql',
		    'database_name' => 'test',
		    'server' => 'localhost',
		    'username' => 'root',
		    'password' => 'root',
		    'charset' => 'utf8'
		]);

	    // $this->database_type 	= $config->database->type;
	    // $this->charset 			= $config->database->charset;
	    // $this->database_name 	= $config->database->database;
	    // $this->server 			= $config->database->host;
	    // $this->username 		= $config->database->username;
	    // $this->password 		= $config->database->password;
	    // $this->port 		= $config->database->port;
	    // $this->prefix 		= $config->database->prefix;
	}
	
}


