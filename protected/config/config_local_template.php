<?php

define('BASE_URL','http://localhost/guestbook/');  /* Base_url including trailing slash */
return [
		/* Database connection string for activerecord */
		'dbConnectionString'=>'mysql://username:password@localhost/database_name',

		/* include dir which contains activeRecord class */
		'includePath'=>'/var/www/includes/'
		
];