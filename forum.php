<?php
  session_start();
  

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['user_id'])) {
		header("location:./login.php");
  }
?>

<!DOCTYPE html>
<html>

	<head>
 
		<!-- 
				Internet Tools Project
				Version 1.0
				login.html
				Authors:   Rachelle Barrette
						   Thomas Malley
			
				Date: 		2017-01-24	
			
						                                  -->
						
						
			<meta charset="UTF-8">
			
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			
			<title>Forum</title>

	</head>
	<body>
		<?php require_once 'templates/loginheader.php';?>
			
			
			
			<h1>Forum</h1>
			
			
	</body>
			<?php require_once 'templates/loginfooter.php'; ?>