<?php
// access or start the session, so we can refer to session variables below
session_start();
// variable to set the welcome message when the user is logged in or not
$welcome_message = '<li class="userwelcome">Welcome Guest!</li>';
// variable to set the add products link if the user is logged in
$add_link="";
$location_link="";
// variable to set the remove products link if the user is logged in
$remove_link="";
// variable to set wheter the login button will show
$login="<a class=\"topli\" href=\"login.php\">Login</a>";
// if statement to determine if the user is logged in, what will be displayed on the page
if(isset($_SESSION['logged_in'])){
	$welcome_message = '<li class="userwelcome">Welcome '.$_SESSION['name'].'!</li>';
	$add_link = '<a class="add" href="add_products.php">Add Products</a>';
	$location_link = '<a class="add" href="add_locations.php">Add Locations</a>';
	$remove_link = '<input type="submit" value="Remove Product">';
	$login="<a class=\"topli\" href=\"process_logout.php\">Logout</a>";
}
// link to the function library to store functions
include("includes/function_library.php");
// grabs prod_id and stores it in a variable
$chosen_id = $_GET['prod_id'];
// call a function from library, getting all rows data from the MySQL table where the product_id equals the chosen id from the form, storing all the query results in a variable
$results = run_my_query("SELECT * FROM product_table WHERE product_id=$chosen_id");
?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css">
    <title>Marc Music Market</title>
    <meta name="viewport" content="initial-scale=1.0,width=device-width,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
</head>

<body>
	<header>
		<h1>Marc Music Market</h1>
        <div class="contain">
            <img src="img/logo.png" alt="Marc Music Market">
        </div>
    </header>
	<nav>
		<ul class="clearfix topul">
            <a class="topli" href="index.php">Home</a>
            <a class="topli" href="products.php">Products</a>
            <a class="topli" href="locations.php">Locations</a>
            <a class="topli" href="contact.php">Contact</a>
            <?php echo /* displays the login button or the logout button whether the user is logged in or not */ $login; ?>
		</ul>
	</nav>
    <section class="section2">
        <ul class="userpanel">
                <?php echo /* displays a welcome message to the user, whether they are a guest or if they are logged in */ $welcome_message; ?>
                <?php echo /* displays the add link button if the user is logged in */ $add_link; ?>
                <?php echo $location_link; ?>    
        </ul>
    	<div class="display2">
        	<h3>Product Details</h3>
            <div class="contain">
			<?php
				// outputs data from the mySQL file
				$results -> data_seek(0);
				// while loop to display each item from the mySQL file and have it repeat into a new div tag
				while($row = $results -> fetch_assoc()){
					// sets the $p_img variable to the product thumbnail image from the SQL document
					$p_img = $row['product_large_img'];
					// sets the $p_name variable to the product name from the SQL document
					$p_name = $row['product_name'];
					// sets the $p_price variable to the product price from the SQL document
					$p_price = $row['product_price'];
					// sets the $p_desc variable to the product description from the SQL document
					$p_desc = $row['description'];
					// sets the $p_id variable to the product id from the SQL document
					$p_id = $row['product_id'];
			?>
            <div class="one-product">
                <img src="img/<?php /* display product image */echo $p_img ?>" alt="caption" />
                <h6><?php /* display product name */ echo $p_name ?></h6>
                <h6>$<?php /* display product price */ echo $p_price ?></h6>
				<p><?php /* display product description */ echo $p_desc ?></p>
                <a id="return" href="products.php">Return to Products</a>
            </div>
            <?php
				// closes the while loop
				}
			?>
            </div>
        </div>
    </section>
    <footer>
    	<h6>Marc Music Market is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>). All material on this site is fictitious, and was created for educational purposes only.</h6>
    </footer>
</body>
</html>