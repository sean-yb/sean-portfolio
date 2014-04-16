<?php
// insert code from an external file:
include("includes/function_library.php");
// access or start the session, so we can refer to session variables below
session_start();
// ends a current session
session_destroy();
// relocates the page to index.php
header('location:index.php');

?>