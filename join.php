<?php
// Check if the form has been submitted via post method and then validate
if(isset($_POST['first_name']) and isset($_POST['last_name'])) {
	echo 'Data to write';
	$firstname = test_input($_POST['first_name']);
	$lastname = test_input($_POST['last_name']);
	$roster_txt = "roster.txt";
	$fh = fopen("roster.txt", "a");
	fwrite($fh, $firstname);
	fwrite($fh, " ");
	fwrite($fh, $lastname);
	fwrite($fh, "\r\n");
	header("Location: roster.php");
	die();
}

// Basic form validation to improve security
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>