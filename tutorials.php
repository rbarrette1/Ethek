
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
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			
			<title>Log In</title>

	</head>
	<body>
		<?php require_once 'templates/loginheader.php';?>
			<table id="tutorialstable">
				<tr>
				<td>
					<img width="60%" src="sitepics/wifi.jpg"><br>
					<a href="wifi_tutorial.php">How to connect<br> to wifi</a>
				</td>
				<td id="picture">
					<img width="90%" src="sitepics/background.png"><br>
					<a href="background_tutorial.php">How to change<br> your background<br> picture</a>
				<td id="picture">
					<img width="45%" src="sitepics/folder.png"><br>
					<a href="folder_tutorial.php">How to create<br> a folder on<br> your desktop</a>
				</td>
				</tr>
			</table>
	</body>
		<footer>	
			<?php require_once 'templates/loginfooter.php'; ?>
		</footer>
	</body>

</html>