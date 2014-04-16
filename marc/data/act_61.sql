DROP DATABASE IF EXISTS act61;
CREATE DATABASE IF NOT EXISTS act61;
USE act61;

CREATE TABLE product_table (
	product_id INT PRIMARY KEY AUTO_INCREMENT,
	product_name CHAR(255),
	product_price DEC(8,2),
	description TEXT,
	product_thumb_img CHAR(75),
	product_large_img CHAR(75),
	type ENUM ("guitar","bass","piano","keyboard","saxaphone","violin","ukulele")
)ENGINE=InnoDB AUTO_INCREMENT=63410;

INSERT INTO product_table
	VALUES
	(NULL, "Marc N-100 Acoustic Guitar", 299.99, "The Marc N-100 is one of the best and most affordable acoustic guitars on the market. The expertly braced rosewood body and fretboard add perfection to volume, tone, and overall sound, all at a low price.", "n100_thumb_img.jpg", "n100_large_img.jpg","guitar"),
	
	(NULL, "Marc N-200 Electric Guitar", 1099.99, "The Marc N-200 'Good Job' is the top guitar on the market in both design and sound. Installed with two Marc Custom humbuckers, the Good Job creates the best sound compared to all other guitars, and maintains good looks with the thumbs up headstock.", "n200_thumb_img.jpg","n200_large_img.jpg","guitar"),
	
	(NULL, "Marc N-5000 Grand Piano", 2999.99, "The N-5000 Grand Piano is an amazing work of craftsmanship and possesses a beautiful pure piano sound. Marc quality strength guarantees a lifetime of use and minimal tuning.", "n5000_thumb_img.jpg", "n5000_large_img.jpg","piano"),
	
	(NULL, "Marc N-4000 Keyboard", 1499.99, "The N-4000 Multi-Effect Keyboard is the most compact and versatile keyboard in the world. Preloaded with over 1000 effects and instrument sounds and featuring built-in pressure sensitive keys, this is a great keyboard at an affordable price.", "n4000_thumb_img.jpg", "n4000_large_img.jpg","keyboard"),
	
	(NULL, "Marc N-900 Electric Violin", 499.99, "The N-900 Electric Violin produces the cleanest tone in comparison to all other electric violins. Its powerful sound and tough design with an ebony fretboard bring years of usability to any level of player for a low price.", "n900_thumb_img.jpg", "n900_large_img.jpg","violin"),
	
	(NULL, "Marc N-300 Electric-Acoustic Ukulele", 149.99, "The N-300 Electric-Acoustic Ukulele is easily considered one of the toughest, cleanest, and most affordable ukuleles on the market today. With a built in pickup, it can easily be connected to a stage monitor or amplifier to enhance the experience of jamming to a nice ukulele like the N-300.", "n300_thumb_img.jpg", "n300_large_img.jpg","ukulele"),
	
	(NULL, "Marc N-400 Electric Bass", 899.99, "The 'Groove' Electric Bass has one of the most powerful sounds in the bass world. A beautiful fretboard allows for comfortable playing along with fantastic Marc bass pickups for the true sound you want to hear from a bass guitar.", "n400_thumb_img.jpg", "n400_large_img.jpg","bass"),
	
	(NULL, "Marc N-2000 Lap Steel Guitar", 999.99, "The N-2000 is everything you want from a lap steel guitar. An amazing sounding Marc single coil pickup provides the musician a true Hawaiian style tone. It maintains strength with fine crafted basswood and chrome plated steel legs to ensure safety and stability while performing.", "n2000_thumb_img.jpg", "n2000_large_img.jpg","guitar"),
	
	(NULL, "Marc N-210 Electric Guitar", 1599.99, "The 'Classy' is the master shredder's dream guitar. It contains two Marc Customer Humbuckers to provide a strong sound from the guitar and two knobs to exchange the humbuckers to a single coil sound, in order to clean it up for different genre. With gold plated hardware, anyone holding this axe is considered 'Classy'.", "n210_thumb_img.jpg", "n210_large_img.jpg","guitar"),
	
	(NULL, "Marc N-600 Alto Saxophone", 2999.99, "The N-600 Saxaphone is the woodwind instrument for the legends to hold. Producing a beautiful tone and a powerful sound within the brass, the N-600 is a must have for all professional musicians.", "n600_thumb_img.jpg", "n600_large_img.jpg","saxaphone");
	
CREATE TABLE user_table (
	id int PRIMARY KEY auto_increment,
	username CHAR(25),
	password CHAR(25),
	privilege ENUM("user","admin")
)ENGINE=InnoDB AUTO_INCREMENT=1;

INSERT INTO user_table
	VALUES
	(NULL, "admin", "admin", "admin");

SHOW DATABASES;
SHOW TABLES;
SELECT * FROM product_table;