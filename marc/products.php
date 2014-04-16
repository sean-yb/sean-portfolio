<?php
// access or start the session, so we can refer to session variables below
session_start();
// if user has logged in, set up some content areas
$welcome_message = '<li class="userwelcome">Welcome Guest!</li>';
$add_link="";
$location_link="";
$remove_link="";
$login="<a class=\"topli\" href=\"login.php\">Login</a>";
if(isset($_SESSION['logged_in'])){
	$welcome_message = '<li class="userwelcome">Welcome '.$_SESSION['name'].'!</li>';
	$add_link = '<a class="add" href="add_products.php">Add Products</a>';
	$location_link = '<a class="add" href="add_locations.php">Add Locations</a>';
	$remove_link = '<input type="submit" value="Remove Product">';
	$login="<a class=\"topli\" href=\"process_logout.php\">Logout</a>";
}
// link to the function library to store functions
include("includes/function_library.php");

$where_clause = '';
if(isset($_POST["WHERE_choice"])){
	if($_POST["WHERE_choice"]=="choice1"){
		$where_clause = " WHERE type = \"guitar\" ";
	}else if($_POST["WHERE_choice"]=="choice2"){
		$where_clause = " WHERE type = \"bass\" ";
	}else if($_POST["WHERE_choice"]=="choice3"){
		$where_clause = " WHERE type = \"piano\" ";
	}else if($_POST["WHERE_choice"]=="choice4"){
		$where_clause = " WHERE type = \"keyboard\" ";
	}else if($_POST["WHERE_choice"]=="choice5"){
		$where_clause = " WHERE type = \"saxaphone\" ";
	}else if($_POST["WHERE_choice"]=="choice6"){
		$where_clause = " WHERE type = \"violin\" ";
	}else if($_POST["WHERE_choice"]=="choice7"){
		$where_clause = " WHERE type = \"ukulele\" ";
	};	
}
// set up var to have a certain ORDER BY by default
$order_clause = ' ORDER BY product_id';
// if user has chosen a sorting column in the dropdown below and refreshed the page, use a different ORDER BY instead
if(isset($_POST["sort_choice"])){
	if($_POST["sort_choice"]=="sort_choice1"){
		$order_clause = " ORDER BY product_id";
	}else if($_POST["sort_choice"]=="sort_choice2"){
		$order_clause = " ORDER BY product_name";
	}else if($_POST["sort_choice"]=="sort_choice3"){
		$order_clause = " ORDER BY product_price";
	};
}
// call a function from library, getting all rows data from the MySQL table, storing all the query results in a variable
$results = run_my_query('SELECT * FROM product_table'.$where_clause.$order_clause);
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
    <section>
    	<ul class="userpanel">
        	<?php echo $welcome_message; ?>
            <?php echo $add_link; ?>
            <?php echo $location_link; ?>  
        </ul>
    	<div class="display">
        	<h3>Products</h3>
            <div class="sort">
                <form id="sort_form" action="products.php" method="post">
                    <select name="sort_choice">
                        <option value="sort_choice1">Sort by id</option>
                        <option value="sort_choice2">Sort by product name</option>
                        <option value="sort_choice3">Sort by price</option>
                    </select>
                    <select name="WHERE_choice">
                        <option>All Products</option>
                        <option value="choice1">Guitar</option>
                        <option value="choice2">Bass</option>
                        <option value="choice3">Piano</option>
                        <option value="choice4">Keyboard</option>
                        <option value="choice5">Saxaphone</option>
                        <option value="choice6">Violin</option>
                        <option value="choice7">Ukulele</option>
                    </select>
                    <input type="submit" />
                </form>
            </div>
            <div class="prod-contain">
			<?php
				// outputs data from the mySQL file
				$results -> data_seek(0);
				// while loop to display each item from the mySQL file and have it repeat into a new div tag
				while($row = $results -> fetch_assoc()){
					$p_img = $row['product_thumb_img'];
					$p_name = $row['product_name'];
					$p_price = $row['product_price'];
					$p_id = $row['product_id'];
			?>
            <div class="products">
                <form action="product_details.php" method="get">
                    <input class="pimage" type="image" src="img/<?php /* display product thumbnail image */echo $p_img ?>"/>
                    <h5><?php /* display product name */ echo $p_name ?></h5>
                    <h5>$<?php /* display product price */ echo $p_price ?></h5>
                    <input type="submit" value="Details"/>
                    <input type="hidden" name="prod_id" value="<?php /* display product id */ echo $p_id ?>">
                </form>
                <form action="process_delete_products.php" method="post" enctype="multipart/form-data">
                        <?php echo $remove_link ?>
                        <input type="hidden" name="p_id" value="<?php echo $p_id;?>">
                </form>
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