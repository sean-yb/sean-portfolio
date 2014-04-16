<?php

// insert code from an external file:
include("includes/function_library.php");

$chosen_id = $_POST['p_id'];

$result = run_my_query("DELETE FROM product_table WHERE product_id = $chosen_id");

header('location:products.php');
?>