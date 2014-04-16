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
// variable to set whether the login button will show
$login="<a class=\"topli\" href=\"login.php\">Login</a>";
// variable to set the login button on the homepage
$login_button="<div class=\"button\" id=\"button4\"><img src=\"img/img5.png\"></div>";
// if statement to determine if the user is logged in, what will be displayed on the page
if(isset($_SESSION['logged_in'])){
	// changes the welcome message
	$welcome_message = '<li class="userwelcome">Welcome '.$_SESSION['name'].'!</li>';
	// shows the add products link
	$add_link = '<a class="add" href="add_products.php">Add Products</a>';
	// shows the add locations link
	$location_link = '<a class="add" href="add_locations.php">Add Locations</a>';
	// shows the remove product button
	$remove_link = '<input type="submit" value="Remove Product">';
	// changes the login button to logout
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
                <?php echo /* displays the add location link button if the user is logged in */ $location_link; ?>    
        </ul>
    	<div class="display2">
        	<h3>Contact Us</h3>
			<div class="contain">
				<div class="one-product">
                    <div id="iframe-wrap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1518.6390671767087!2d-80.1887145451279!3d40.424839757386074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88345bd4947ff277%3A0x26a6bd85f1ec8990!2sPittsburgh+Technical+Institute%2C+McKee+Road%2C+Oakdale%2C+PA!5e0!3m2!1sen!2sus!4v1391188341276" width="600" height="450" frameborder="0" style="border:0"></iframe></div>
                	<p>All questions can be answered through our coporate offices located in Pittsburgh, Pennsylvania. To get in contact with the corporate office, please call 1-800-555-5555, or e-mail us at <a class="mailto" href="mailto:office@mandymusicmarket.com">office@mandymusicmarket.com</a>. To get into contact with individual stores, please take a look at our <a class="mailto" href="locations.php">locations</a> page to obtain contact information. Thank you!</p>
                </div>
            </div>
		</div>
    </section>
    <footer>
    	<h6>Marc Music Market is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>). All material on this site is fictitious, and was created for educational purposes only.</h6>
    </footer>
</body>
</html>