<!DOCTYPE html>

<html>

<head>
	<meta charset="UTF-8">

	<title>Water Scarcity | Learn How You Can Help! | Take the Pledge!</title>

	<meta name="description" content="A site dedicated to teaching about the issues of Water Scarcity and educating people on how they can help.">
	<meta name="author" content="Michael Wood">
	<meta name="keywords" content="water,scarcity,cause,help,educate,information,statistics,global,national,problem,issue,issues">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" rel="stylesheet" href="stylesheets/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald|Quattrocento+Sans' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
</head>

<body>

<?php
	$count_my_page = ("hits.txt");
	$hits = file($count_my_page);
	$hits[0] ++;
	$fp = fopen($count_my_page , "w");
	fputs($fp , "$hits[0]");
	fclose($fp);
?>

<?php 
	$ip_log = 'iplog.txt';
	$ipaddress = $_SERVER['REMOTE_ADDR'];
	$result = str_replace(",", " ", $ipaddress);
	$fp = fopen($ip_log, "w");
	fwrite($fp, $result);
	fclose($fp);
?>

<nav>
	<ul>
		<li><a href="#home">Home</a></li>
		<li><a href="#global">Global</a></li>
		<li><a href="#national">National</a></li>
		<li><a href="#about">About</a></li>
		<li><a href="#join">Join</a></li>
	</ul>
</nav>

<div id="circle-nav-container">
  <div class="corner"><a href="#"><span id="mainBtn" class="fa fa-bars fa-3x fa-inverse"></span></a>
    <svg id="circle-tab" height="100" width="100">
      <circle cx="0" cy="0" r="100" fill="#69d2e7"/>
    </svg>
  </div>
</div>

<div id="circleNavButtons">
  <a href="#home" id="homeBtn" class="fa fa-home"></a>
  <a href="#national" id="nationalBtn" class="fa fa-globe"></a>
  <a href="#global" id="globalBtn" class="fa fa-flag"></a>
  <a href="#about" id="aboutBtn" class="fa fa-comment"></a>
  <a href="#join" id="joinBtn" class="fa fa-pencil"></a>
</div>

<div class="content-container">

	<div id="home"></div>

	<div class="spacer"></div>

	<div id="banner">
		<img id="earthDrop" src="images/Earth_Drop.png" alt="Earth inside water droplet">
		<h1 id="ctaTextTop">Water scarcity is a global problem!<br>Find out how you can help today!</h1>
		<div class="button" id="bannerCTA"><p>Join the Cause!</p></div>
	</div>

	<h1 id="global">Global Facts</h1>
	
	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>Roughly 783 million people do not have access to clean and safe water. Of those, 37% of these people live in Sub-Saharan Africa. That's about 1 in 9 people of the world who do not have access to safe and clean drinking water.</p>
	</div>
	
	<div class="section-right">
		<p>Around 1.6 billion live in areas where there is water, but they can't afford to drink it. This is what is known as economic water scarcity. By 2025, 1.8 billion people will experience absolute water scarcity, and 2/3 of the world will be living under water-stressed conditions.</p>
		<img src="images/placeholder-image.png" alt="placerholder">
	</div>

	<h1 id="national">National Facts</h1>

	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>California faces a fourth consecutive year of droughts as a result of poor water management. This lack of water hurts the farming and thus the economy. If something isn't done, California could face serious natural and economic consequences.</p>
	</div>
	
	<div class="section-right">
		<p>Lake Meade in Las Vegas is drying up as a result of overuse in the surrounding area. This overuse has already lowered the capacity of the lake a little, and if it continues to go down, Vegas could face a sever water crisis as well as a power shortage due to the loss of power generated by Lake Meade.</p>
		<img src="images/placeholder-image.png" alt="placerholder">
	</div>

	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>Places like Florida's entire water supplies are just a shallow lens of water resting on top of a saltwater bed. As we use this fresh water, the salt water pushes up into that space and prevents fresh water from filling back in. This results in the loss of a usable water supply which could greatly damage not only the people of Florida, but also the delicate ecosystems of some of the swamps and lakes.</p>
	</div>

	<h2 id="about">About the Cause</h2>

	<p class="about-us">The whole purpose of this project is to push awareness for this very important issue of water scarcity. Although in some areas it may seem like a non-issue, it is something that permeates the lives of everyone, regardless of whether or not you are directly affected. In addition to the statistics listed above, there are many other places in the world that all face serious problems with water scarcity, and it is up to everyone in the world to contribute to fixing this major issue that we as a global community are facing.</p>

	<br>

	<p class="about-us">When looking at such a global problem, it is often hard to think about how your actions can affect such a big issue. This website is serving as a way for people to unite against this issue in their own individual way. By signing the roster, you not only contribute to the cause, but you will also be given a list of ways that you can help fix this global issue in your own small way.</p>

	<br>

	<p class="about-us">In addition to helping the cause, by visiting this website, you have contributed to a physical art piece in the Hand Art Center in DeLand, FL that exists to further illustrate the message of this cause and serves as another way for us all to collaborate in the education of this material.</p>

	<h3 id="join">Find out how you can help the world!</h3>

</div>

<div id="modal-continer">

  <div id="modal">

    <div class="x">X</div>

    <form id="form" action="join.php" method="post">
      First name:<br>
      <input type="text" name="first_name">
      <br>
      Last name(Optional):<br>
      <input type="text" name="last_name">
      <br>
      <!-- E-mail:<br>
      <input type="text" name="e-mail">
      <br> -->
      <input type="submit" value="Join!">
    </form>
    
  </div>
  
  <div class="button" id="bottomCTA"><p>Join the Cause!</p></div>

  <p id="roster"><a href="roster.php">Or see who else has joined here!</a></p>
</div>

<footer>
	<p>Designed and developed by <a href="http://galatea.stetson.edu/~mwood/">Michael Wood</a></p>
</footer>

</body>

</html>