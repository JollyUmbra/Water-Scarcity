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
		<li><a href="#national">National</a></li>
		<li><a href="#global">Global</a></li>
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
  <a href="#national" id="nationalBtn" class="fa fa-flag"></a>
  <a href="#global" id="globalBtn" class="fa fa-globe"></a>
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

	<h1 id="national">National Stats</h1>
	
	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>I figured I could cut classes for the rest of the semester and he couldn't flunk me as long as I, you know, made the thing. So I finished it in a couple days. And it looked pretty lame, but it worked. You know, for putting in or whatnot. So when I showed it to Mr. Pike for my grade, he looked at it and said: 'Is that the best you can do?' </p>
	</div>
	
	<div class="section-right">
		<p>At first I thought to myself 'Hell yeah, bitch. Now give me a D and shut up so I can go blaze one with my boys.' I don't know. Maybe it was the way he said it, but... it was like he wasn't exactly saying it sucked. He was just asking me honestly, 'Is that all you got?' And for some reason, I thought to myself: 'Yeah, man, I can do better.'</p>
		<img src="images/placeholder-image.png" alt="placerholder">
	</div>

	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>So I started from scratch. I made another, then another. And by the end of the semester, by like box number five, I had built this thing. You should have seen it. It was insane. I mean, I built it out of Peruvian walnut with inlaid zebrawood. It was fitted with pegs, no screws, I sanded it for days, until it was smooth as glass. Then I rubbed all the wood with tung oil so it was rich and dark. It even smelled good. You know, you put nose in it and breathed in, it was... it was perfect.</p>
	</div>

	<h1 id="global">Global Stats</h1>

	<div class="section-right">
		<p>I figured I could cut classes for the rest of the semester and he couldn't flunk me as long as I, you know, made the thing. So I finished it in a couple days. And it looked pretty lame, but it worked. You know, for putting in or whatnot. So when I showed it to Mr. Pike for my grade, he looked at it and said: 'Is that the best you can do?'</p>
		<img src="images/placeholder-image.png" alt="placerholder">
	</div>
	
	<div class="section-left">
		<img src="images/placeholder-image.png" alt="placerholder">
		<p>At first I thought to myself 'Hell yeah, bitch. Now give me a D and shut up so I can go blaze one with my boys.' I don't know. Maybe it was the way he said it, but... it was like he wasn't exactly saying it sucked. He was just asking me honestly, 'Is that all you got?' And for some reason, I thought to myself: 'Yeah, man, I can do better.'</p>
	</div>

	<div class="section-right">
		<p>So I started from scratch. I made another, then another. And by the end of the semester, by like box number five, I had built this thing. You should have seen it. It was insane. I mean, I built it out of Peruvian walnut with inlaid zebrawood. It was fitted with pegs, no screws, I sanded it for days, until it was smooth as glass. Then I rubbed all the wood with tung oil so it was rich and dark. It even smelled good. You know, you put nose in it and breathed in, it was... it was perfect.</p>
		<img src="images/placeholder-image.png" alt="placerholder">
	</div>

	<h2 id="about">About the Cause</h2>

	<p class="about-us">What? Come on! Man, you're smart. You made poison out of beans, yo. Look, we got, we got an entire lab right here. Alright? How about you pick some of these chemicals and mix up some rocket fuel? That way you could just send up a signal flare. Or you make some kind of robot to get us help, or a homing device, or build a new battery, or... wait. No. What if we just take some stuff off of the RV and build it into something completely different? You know, like a... Like a dune buggy. That way, we can just dune buggy or... What? Hey? What is it? What?</p>

	<br>

	<p class="about-us">So I started from scratch. I made another, then another. And by the end of the semester, by like box number five, I had built this thing. You should have seen it. It was insane. I mean, I built it out of Peruvian walnut with inlaid zebrawood. It was fitted with pegs, no screws, I sanded it for days, until it was smooth as glass. Then I rubbed all the wood with tung oil so it was rich and dark. It even smelled good. You know, you put nose in it and breathed in, it was... it was perfect. </p>

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
	<p>Designed by Michael Wood</p>
</footer>

</body>

</html>