<?php
// link to the function library to store functions
include("includes/function_library.php");

$key = $_GET['key'];
$tone = $_GET['tone'];
$tempo = $_GET['tempo'];

// call a function from library, getting all rows data from the MySQL table, storing all the query results in a variable

if($key=='?key'&$tone=='?tone'&$tempo=='?tempo'){
	$results = run_my_query('SELECT * FROM music_table ORDER BY RAND() LIMIT 1');
}else if($key=='?key'&$tone=='?tone'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_tempo="'.$tempo.'" ORDER BY RAND() LIMIT 1');
}else if($key=='?key'&$tempo=='?tempo'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_tone="'.$tone.'" ORDER BY RAND() LIMIT 1');
}else if($tone=='?tone'&$tempo=='?tempo'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_key="'.$key.'" ORDER BY RAND() LIMIT 1');
}else if($key=='?key'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_tone="'.$tone.'" AND track_tempo="'.$tempo.'" ORDER BY RAND() LIMIT 1');
}else if($tone=='?tone'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_key="'.$key.'" AND track_tempo="'.$tempo.'" ORDER BY RAND() LIMIT 1');
}else if($tempo=='?tempo'){
	$results = run_my_query('SELECT * FROM music_table WHERE track_key="'.$key.'" AND track_tone="'.$tone.'" ORDER BY RAND() LIMIT 1');
}else{
	$results = run_my_query('SELECT * FROM music_table WHERE track_key="'.$key.'" AND track_tone="'.$tone.'" AND track_tempo="'.$tempo.'" ORDER BY RAND() LIMIT 1');
}



?><!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Elder Music Project</title>
    <link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/style.css" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="img/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="img/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="img/mstile-144x144.png">
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/responsive-nav.js"></script>
    <script type="text/javascript" src="js/page-load.js"></script>
    <script type="text/javascript" src="js/question.js"></script>
    <script type="text/javascript" src="js/backgrounds.js"></script>
    <script type="text/javascript" src="js/chord-change.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300|Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="initial-scale=1.0,width=device-width,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>
    <header id="main-header">
        <nav id="mainnav">
        	<a href="index.html" class="navbtn">HOME</a>
            <a href="index.html#about" class="navbtn">ABOUT</a>
            <a href="index.html#music" class="navbtn">MUSIC</a>
            <a href="index.html#feedback" class="navbtn">FEEDBACK</a>
        </nav>
    </header>
    <header id="mobile-header">
        <div id="menu">
            <img src="img/menu-icon.png" id="menubtn">
		</div>
        <nav id="dropnav">
        	<a href="index.html" class="navbtn">HOME</a>
            <a href="index.html#about" class="navbtn">ABOUT</a>
            <a href="index.html#music" class="navbtn">MUSIC</a>
            <a href="index.html#feedback" class="navbtn">FEEDBACK</a>
        </nav>
    </header>
    <div id="main">
        <div id="content">
            <div class="box1">
                <div class="contain">
                    <div id="generated">
                        <?php
                            // outputs data from the mySQL file
                            $results -> data_seek(0);
                            // while loop to display each item from the mySQL file and have it repeat into a new div tag
                            while($row = $results -> fetch_assoc()){
                                $file = $row['track_file'];
								$file2 = $row['track_file2'];
								$scale1 = $row['track_scale_1'];
								$scale2 = $row['track_scale_2'];
								$chord1 = $row['track_chord_1'];
								$chord2 = $row['track_chord_2'];
								$chord3 = $row['track_chord_3'];
								$chord4 = $row['track_chord_4'];
								$chord5 = $row['track_chord_5'];
								$chord6 = $row['track_chord_6'];
								$chord7 = $row['track_chord_7'];
                        ?>
                        <h1 id="generated-title"><?php echo $key." ".$tone." ".$tempo;?></h1>
                        <audio controls>
                        	<source src="https://dl.dropboxusercontent.com/sh/uoy602ffgxg37sc/<?php echo $file2; ?>" type="audio/mpeg">
                        	<source src="https://dl.dropboxusercontent.com/sh/w0m3qn5ex647lrn/<?php echo $file; ?>" type="audio/wav">
                            Your browser does not support this audio file; please upgrade your browser.
                        </audio>
                        <div id="track-options">
                        	<h2>
                            	<a href="javascript:history.go(0)">Refresh Tracks</a>
                                <a href="https://dl.dropboxusercontent.com/sh/w0m3qn5ex647lrn/<?php echo $file; ?>?dl=1&token_hash=AAGplGAOL9NFeuyrQLVK8hBWltFf_dnIdI2dreXvvwSuyg">Download .wav</a>
                                <a href="https://dl.dropboxusercontent.com/sh/uoy602ffgxg37sc/<?php echo $file2; ?>?dl=1&token_hash=AAGWr7ku4T9XbUZ0w2M1HdqY1Yj77ubj2KRV5Gfwst38rA">Download .mp3</a>
							</h2>
                            <h3><strong>WARNING</strong>: If you are using Internet Explorer, you might have several issues loading the track. Please upgrade your browser to Google Chrome for the best user experience.</h3>
                        </div>
                        <h2 class="trackhead">Pentatonic Scales <span class="item">?</span></h2>
                        <div id="scales">
                            <img src="img/<?php echo $scale1; ?>.png">
                            <img src="img/<?php echo $scale2; ?>.png">
                        </div>
                        <h2 class="trackhead"><?php echo $key." ".$tone; ?> Chords <span class="item2">?</span></h2>
                        <h3>- Click a chord to change its shape -</h3>
                        <div id="chords">
                            <div id="chord1" class="chord">
                                <img id="chord1-1" src="img/chord-<?php echo $chord1; ?>.png">
                                <img id="chord1-2" src="img/chord-<?php echo $chord1; ?>-bar01.png">
                                <img id="chord1-3" src="img/chord-<?php echo $chord1; ?>-bar02.png">
                            </div>
                            <div id="chord2" class="chord">
                                <img id="chord2-1" src="img/chord-<?php echo $chord2; ?>.png">
                                <img id="chord2-2" src="img/chord-<?php echo $chord2; ?>-bar01.png">
                                <img id="chord2-3" src="img/chord-<?php echo $chord2; ?>-bar02.png">
                            </div>
                            <div id="chord3" class="chord">
                                <img id="chord3-1" src="img/chord-<?php echo $chord3; ?>.png">
                                <img id="chord3-2" src="img/chord-<?php echo $chord3; ?>-bar01.png">
                                <img id="chord3-3" src="img/chord-<?php echo $chord3; ?>-bar02.png">
                            </div>
                            <div id="chord4" class="chord">
                                <img id="chord4-1" src="img/chord-<?php echo $chord4; ?>.png">
                                <img id="chord4-2" src="img/chord-<?php echo $chord4; ?>-bar01.png">
                                <img id="chord4-3" src="img/chord-<?php echo $chord4; ?>-bar02.png">
                            </div>
                            <div id="chord5" class="chord">
                                <img id="chord5-1" src="img/chord-<?php echo $chord5; ?>.png">
                                <img id="chord5-2" src="img/chord-<?php echo $chord5; ?>-bar01.png">
                                <img id="chord5-3" src="img/chord-<?php echo $chord5; ?>-bar02.png">
                            </div>
                            <div id="chord6" class="chord">
                                <img id="chord6-1" src="img/chord-<?php echo $chord6; ?>.png">
                                <img id="chord6-2" src="img/chord-<?php echo $chord6; ?>-bar01.png">
                                <img id="chord6-3" src="img/chord-<?php echo $chord6; ?>-bar02.png">
                            </div>
                            <div id="chord7" class="chord">
                                <img id="chord7-1" src="img/chord-<?php echo $chord7; ?>.png">
                                <img id="chord7-2" src="img/chord-<?php echo $chord7; ?>-bar01.png">
                                <img id="chord7-3" src="img/chord-<?php echo $chord7; ?>-bar02.png">
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>	
            </div>
        </div>
    </div>
    <footer>
    	<div class="contain">
        	<div id="footernav">
            	<a href="index.html" class="navbtn">HOME</a>
                <a href="index.html#about" class="navbtn">ABOUT</a>
                <a href="index.html#music" class="navbtn">MUSIC</a>
                <a href="index.html#feedback" class="navbtn">FEEDBACK</a>
            </div>
            <h6>Elder Music Project is a student project created by Sean Gracy (<a href="http://www.seangracy.com">www.seangracy.com</a>).</h6>
        </div>
    </footer>
</body>
</html>