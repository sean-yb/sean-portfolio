<?php
// insert code from an external file:
include("/includes/function_library.php");
// store in a variable the product name user chose on add_products.php:
$pname = $_POST['newname'];
$pprice = $_POST['newprice'];
$pdesc = $_POST['newdesc'];
$ptype = $_POST['newtype'];

// obtain next available id
$results = run_my_query("SELECT product_id FROM product_table ORDER BY product_id DESC LIMIT 1");

$results -> data_seek(0);

while($row = $results -> fetch_assoc()){
	$p_id = $row['product_id'];
	$newid = $p_id + 1;
};

// store the name the thumbnail had as user uploaded it
$oldthumbname = $_FILES['newthumb']['name'];
// craft a new name for the thumb, incorporating the next available id #, to guarantee unique filename
$newthumbname = 'th'.$newid.$oldthumbname;
// move the uploaded thumbnail from its tmp location on the C: into a folder and filename of our choice:
move_uploaded_file($_FILES['newthumb']['tmp_name'],'img/'.$newthumbname);

// store the name the large image had as user uploaded it
$oldlargename = $_FILES['newlarge']['name'];
// craft a new name for the large image, incorporating the next available id #, to guarantee unique filename
$newlargename = 'th'.$newid.$oldlargename;
// move the uploaded image from its tmp location on the C: into a folder and filename of our choice:
move_uploaded_file($_FILES['newlarge']['tmp_name'],'img/'.$newlargename);

// query to add a record:
$results = run_my_query("
	INSERT INTO product_table
		VALUES
		(NULL, \"$pname\", $pprice, \"$pdesc\",\"$newthumbname\", \"$newlargename\",\"$ptype\");
		");
// redirect user back to all_products
header('location: products.php');
?>