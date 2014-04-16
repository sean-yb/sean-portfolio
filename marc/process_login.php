<?php
// store in a var the username they typed on login.php:
$theirname = $_POST['uname'];
// store in a var the password they typed on login.php:
$theirpass = $_POST['upass'];

// insert code from an external file:
include("includes/function_library.php");

// run a SELECT query to see if any row has that username and password
$results = run_my_query("SELECT * FROM user_table WHERE username = \"$theirname\" AND password = \"$theirpass\"");

$results -> data_seek(0);

// if any row was found
if($row = $results -> fetch_assoc()){
// ... do good things
	//echo "Your Privilege level is: ".$row['privilege'];
	// access existing session (or start one):
	session_start();
	// check out unique identifier
		// $my_s_id = session_id();
	// with a session started, we can invent session variables
	$_SESSION['logged_in'] = true;
	$_SESSION['name']= $row['username'];
	// redirect
	header("location:index.php");
// otherwise
}else{
// redirect usesr back and trigger feedback
	header('Location:login.php?error=blankamount');

}
?>