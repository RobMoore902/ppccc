<?php

/*
* A file to store commonly used PHP functions..
* As of now, it only contains a function to convert the data pulled from the DB to json and send back to the callback function
*
* Author: Mohamad Tawakol. Email: Tawakool@gmail.com
*/

	ini_set('display_errors', '0');
	error_reporting(E_ALL | E_STRICT);

	include('../config.php');

	function exitWithJSON($data) {
		header('Content-Type: application/json');
		$callbackStart = '';
		$callbackStop = '';
		if(!empty($_GET['callback'])) {
			$callbackStart = $_GET['callback'] . '(';
			$callbackStop = ');';
		}
		exit( $callbackStart . json_encode($data) . $callbackStop );
	}

?>