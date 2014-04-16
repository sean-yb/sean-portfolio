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
	$login='<a class="topli" href="process_logout.php">Logout</a>';
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
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cycle.all.js"></script>
    <script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.caption2.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/slide-responsive.js"></script>
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
    	<div class="cycle-slideshow" 
            data-cycle-fx=scrollHorz
            data-cycle-timeout=3000
            data-cycle-pager-event="mouseover"
            data-cycle-caption-plugin=caption2
            data-cycle-caption-fx-out='slideUp'
            data-cycle-caption-fx-in='slideDown'
            data-cycle-overlay-fx-out="slideUp"
            data-cycle-overlay-fx-in="slideDown"
            >
            <!-- prev/next links -->
            <div class="cycle-prev"></div>
            <div class="cycle-next"></div>
            <!-- Pager -->
            <div class="cycle-pager"></div>
            
            <img src="img/slide_01.jpg" data-cycle-title="1" data-cycle-desc="Marc Music Market">
            <img src="img/slide_02.jpg" data-cycle-title="2" data-cycle-desc="Marc Music Market">
            <img src="img/slide_03.jpg" data-cycle-title="3" data-cycle-desc="Marc Music Market">
            <img src="img/slide_04.jpg" data-cycle-title="4" data-cycle-desc="Marc Music Market">
        </div>
        <div class="info-home">
            <p>In 2013, Sean Gracy opened the doors to the Marc Music Market in Pittsburgh, Pennsylvania, to provide musicians with the highest quality instruments and equipment necessary for live performances and recording. The MMM is still expanding to many other locations around the United States to provide everyone with the best gear from our ever expanding marketplace.</p>
            <p>Feel free to take a look around on our brand new website! Check out our "Products" page to see our items currently in-stock at our locations. Store locations can be found on the "Locations" page. Finally, for more information on how to contact us, head over to the "Contact" page. Thank you and enjoy your visit to the Marc Music Market!</p>
        </div>
        <div class="middle-home">
            <a href="products.php" class="button">
            	<img src="img/img2.jpg">
            </a>
            <a href="locations.php"class="button">
            	<img src="img/img3.jpg">
            </a>
            <a href="contact.php" class="button">
            	<img src="img/img4.jpg">
            </a>
		</div>
    </section>
    <footer>
    	<h6>Marc Music Market is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>). All material on this site is fictitious, and was created for educational purposes only.</h6>
    </footer>
</body>
</html>