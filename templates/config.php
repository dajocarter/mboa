<?php

    // these two constants are used to create root-relative web addresses
    // and absolute server paths throughout all the code

	define("BASE_URL","/");
	define("ROOT_PATH",$_SERVER["DOCUMENT_ROOT"] . "/");

	// This sets the timezone or else the console will complain
	date_default_timezone_set('America/Indianapolis');

	// Database connection details
	
	/*** mysql hostname ***
	$hostname = 'localhost';

	/*** mysql username ***
	$username = 'mybrainonanatomy';

	/*** mysql password ***
	$password = 'sKdsjzJvrtVC6mXJ';

	try {
		$db = new PDO("mysql:host=$hostname;port=7888;dbname=$username", $username, $password);
		$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $error) {
	    echo $error->getMessage();
	}
*/