<?php
/**
* 
*/
class BaseModel
{
	protected $db;
	function __construct()
	{
	    $config = \Yaf\Application::app()->getConfig();

		$this->db = new \Tool\Medoo([
		    'database_type' => $config->database->type,
		    'database_name' => $config->database->database,
		    'server' 		=> $config->database->host,
		    'username' 		=> $config->database->username,
		    'password' 		=> $config->database->password,
		    'charset' 		=> $config->database->charset
		]);
	}

}