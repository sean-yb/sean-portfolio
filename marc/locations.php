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
        	<h3>Locations</h3>
            <div class="contain">
				<div class="one-product">
                	<?php
						// store the location of the data in a variable
						$fileDir = 'xml/';
						// open a connection to where the article data is stored
						$handle = opendir($fileDir);
						// begin a while loop to execute a series of commands repeatedly on each file in the XML folder
						while(($file = readdir($handle))!==FALSE){
						// if the folder item being looked at is a folder itself, skip to the next item
							if(is_dir($fileDir.$file))continue;
						
						// load the XML data into an array variable from the current XML file being looked at
							$locationFile = simplexml_load_file($fileDir.$file);
							
						// Get each value(id, headline, body) out of the array and store it in a variable
							$l_id = $locationFile['id'];
							$l_city = $locationFile -> city;
							$l_state = $locationFile -> state;
							$l_manager = $locationFile -> manager;
							$l_assist = $locationFile -> assist;
							$l_phone = $locationFile -> phone;
						
						// display those variables in an HTML content structure that repeats once for each article
					?>
						<article>
							<h6><?php echo $l_city.', '.$l_state; ?></h6>
                            <p><strong>Manager: </strong><?php echo $l_manager; ?></p>
                            <p><strong>Assistant Manager: </strong><?php echo $l_assist; ?></p>
							<p><strong>Phone: </strong><?php echo $l_phone; ?></p>
						</article>
					
					<?php
					// close the while loop
					}
					
					?>
                </div>
            </div>
        </div>
    </section>
    <footer>
    	<h6>Marc Music Market is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>). All material on this site is fictitious, and was created for educational purposes only.</h6>
    </footer>
</body>
</html>