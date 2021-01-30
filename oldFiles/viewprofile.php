<?php
  session_start();
   
   if (!isset($_SESSION['user_id'])) {
		header("location:./login.php");
  }else{ 
	 $_SESSION['username'] = $_COOKIE['username'];
	 $_SESSION['user_id'] = $_COOKIE['user_id'];
     
    }
?>


<!DOCTYPE html>
<html>

	<head>
 
 <?php
		//<!-- 
			//	Internet Tools Project
			//	Version 1.0
			//	viewprofile.php
			//	Authors:   Rachelle Barrette
			//			   Thomas Malley
			
			//	Date: 		2017-02-02	
			
				//		                                  -->
			?>			
						
			<meta charset="UTF-8">
			
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			
			<title>Profile</title>

	</head>
	<body>
	
	<?php
	
	require_once ('templates/loginheader.php');
	require_once ('php/connectvars.php');


	echo('<p>You are logged in as ' . $_SESSION['username'] . '</p>');
	

	// Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
  

	// Grab the profile data from the database
  if (!isset($_GET['user_id'])) {
    $query = "SELECT username, first_name, last_name FROM ethek_user WHERE user_id = '" . $_SESSION['user_id'] . "'";
  }
  else {
    $query = "SELECT username, first_name, last_name FROM ethek_user WHERE user_id = '" . $_GET['user_id'] . "'";
  }
  $data = mysqli_query($dbc, $query);

  if (mysqli_num_rows($data) == 1) {
    // The user row was found so display the user data
    $row = mysqli_fetch_array($data);
		
		
		
	echo '<table>';
	
    if (!empty($row['username'])) {
      echo '<tr><td class="label">Username:</td><td>' . $row['username'] . '</td></tr>';
    }
    if (!empty($row['first_name'])) {
      echo '<tr><td class="label">First name:</td><td>' . $row['first_name'] . '</td></tr>';
    }
    if (!empty($row['last_name'])) {
      echo '<tr><td class="label">Last name:</td><td>' . $row['last_name'] . '</td></tr>';
    }
	
	
    echo '</table>';
	
	//table to display favorites
	//most viewed
	//recommeded
					
	
    if (!isset($_GET['user_id']) || ($_SESSION['user_id'] == $_GET['user_id'])) {
      echo '<p>Would you like to <a href="editprofile.php">edit your profile</a>?</p>';
    }
  } // End of check for a single row of user results
  else {
    echo '<p class="error">There was a problem accessing your profile.</p>';
  }

  mysqli_close($dbc);		
			
	?>		
			
			

	
			<?php require_once 'templates/loginfooter.php'; ?>
		