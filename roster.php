<!DOCTYPE html>

<html>
<head>
	<title>Water Scarcity Roster | See Who Has Contributed!</title>

	<meta name="description" content="A site dedicated to teaching about the issues of Water Scarcity and educating people on how they can help.">
	<meta name="author" content="Michael Wood">
	<meta name="keywords" content="water,scarcity,cause,help,educate,information,statistics,global,national,problem,issue,issues,roster,join,help">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link type="text/css" rel="stylesheet" href="stylesheets/styles.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald|Quattrocento+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="content-container" id="roscon">
		<h1 id="roster_header">Everyone who has joined the cause!</h1>

		<ol id="roster-list">
			<?php 
				$roster_txt = "roster.txt";
				$fh = fopen("roster.txt", "r");
				while(!feof($fh)){
					$line = fgets($fh);
					if ($line != ""){
						echo '<li>';
						echo $line;
						echo '</li>';
					}
				}
			?>
		</ol>
	</div>
</body>
</html>