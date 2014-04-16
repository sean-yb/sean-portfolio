<?php
/**
*	Sean's Function Library
*	
*	This is a collection of functions I want many pages to draw from
*
*	@package
*	@author Sean Gracy
*	@copyright 2013 Sean Gracy
*/
	// connects to my host and DB and run a query
	// @param string $q
	function run_my_query($q){
		// MAKE CONNECTION to server and database
		$mysqli= new mysqli('localhost','root','','act61');
		// if statement to display an error message if there is a connection error
		if($mysqli->connect_errno){
			// displays echo statement to show there is a connection error
			echo 'Dude your SQL is jank'.$mysqli->connect_error;
		}
	// runs a query on table, storing the results in an array
	$results = $mysqli -> query($q) or die('Problem with Query: '.$mysqli -> error);
	// closes the connection
	mysqli_close($mysqli);
	// sends back the results
	return $results;
	}
?>