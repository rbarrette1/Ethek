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
			
			<title>Log In</title>

	</head>
	<body>
		<?php require_once 'templates/loginheader.php';?>
			<table>
				<th><!-- Catgories pulled from the database --></th>
				<tr>
					<table><!-- table of all our videos --></table>
				</tr>
			</table>
	</body>
		<footer>	
			<?php require_once 'templates/loginfooter.php'; ?>
		</footer>
	</body>

</html>