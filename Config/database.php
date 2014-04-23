<?php
class DATABASE_CONFIG {

	public $test = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => true,
		'host' => '127.0.0.1:3306',
		'login' => 'root',
		'password' => 'rx12gtr11',
		'database' => 'petri',
	);
}
