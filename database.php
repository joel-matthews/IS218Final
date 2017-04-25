<?php
	
	date_default_timezone_set('America/New_York');
	
	
	//$dsn = 'mysql:host=sql2.njit.edu;dbname=jpm88';
	$hostname = 'sql2.njit.edu';
	$username = 'jpm88';
	$database = 'jpm88';
	
	
    try {
        
        //$db = new PDO($dsn, $username, $password);
        $db = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.html');
        exit();
    }