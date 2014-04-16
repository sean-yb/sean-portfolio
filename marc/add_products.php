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
include("/includes/function_library.php");
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
    <script src="js/validate_products.js"></script>
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
        	<h3>Add Products</h3>
            <div class="contain">
				<div class="one-product">
                <form action="process_add_products.php" method="post" enctype="multipart/form-data" id="myform">
                	<p class="desc">Welcome! This page allows you to add a new product to the Marc Music Market. Please complete the form below and submit it to update our product line. Thank you for your contribution to the MMM!</p>
                    <p>Product Name: <input type="text" name="newname" id="name-input"><span id="name-message"></span></p>
                    <p>Product Price: $<input type="text" name="newprice" id="price-input"/><span id="price-message"></span></p>
                    <p>Description: <span id="name-message"></span></p>
                    	<textarea rows="7" cols="50" name="newdesc" id="name-input"></textarea>
					<p>Type :
                    	<select name="newtype">
                        	<option value="choice1">Guitar</option>
                            <option value="choice2">Bass</option>
                            <option value="choice3">Piano</option>
                            <option value="choice4">Keyboard</option>
                            <option value="choice5">Saxaphone</option>
                            <option value="choice6">Violin</option>
                            <option value="choice7">Ukulele</option>
                        </select>
					</p>
                    <p>Thumbnail Image (100 x 100): <input type="file" name="newthumb"/></p>
                    <p>Large Image (Width under 500px): <input type="file" name="newlarge"/></p>
                    <input type="submit"/>
				</form>
                </div>
            </div>
        </div>
    </section>
    <footer>
    	<h6>Marc Music Market is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>). All material on this site is fictitious, and was created for educational purposes only.</h6>
    </footer>
</body>
</html>