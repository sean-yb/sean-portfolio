<?php
// access or start the session, so we can refer to session variables below
session_start();

$error = '';
if(isset($_GET['error'])){
	$error = 'Invalid Login, please try again.';
}

// variable to set the welcome message when the user is logged in or not
$welcome_message = '<li class="userwelcome">Welcome Guest!</li>';
// variable to set the add products link if the user is logged in
$add_link="";
// variable to set the remove products link if the user is logged in
$remove_link="";
// variable to set wheter the login button will show
$login="<a class=\"topli\" href=\"login.php\">Login</a>";
// if statement to determine if the user is logged in, what will be displayed on the page
if(isset($_SESSION['logged_in'])){
	$welcome_message = '<li class="userwelcome">Welcome '.$_SESSION['name'].'!</li>';
	$add_link = '<a class="add" href="add_products.php">Add Products</a>';
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
		</ul>
    	<div class="display2">
        	<h3>Login</h3>
            <div class="contain">
				<div class="one-product">
                    <form action="process_login.php" method="post" enctype="multipart/form-data">
                        <p>Username: <input type="text" name="uname"/></p>
                        <p>Password: <input type="password" name="upass"/></p>
                        <?php echo '<p class="invalid">'.$error.'</p>' ?>
                        <p>Developer Note: Use the username "admin" and the password "admin" to access the special features of the website. Enjoy!</p>
                        <input type="submit" value="Login"/>
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