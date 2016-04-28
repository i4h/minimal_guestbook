<?php
require_once('protected/config/config.php');

/* Set include path */
set_include_path($config['includePath']);

/* Initialize ActiveRecord */
require_once 'php-activerecord/ActiveRecord.php';
ActiveRecord\Config::initialize(function($cfg) use ($config)
 {
	     $cfg->set_model_directory('protected/models');
	     $cfg->set_connections(array(
			         'development' => $config['dbConnectionString']));
 });

