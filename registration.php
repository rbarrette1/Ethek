<?php

//connection variabes
require_once('php/connectvars.php');

//Start the session
session_start();


if(isset($_SESSION['user_id'])){
    	header("location:./viewprofile.php");
}


//error_reporting(0);

$error_msg = "";

//if the user isin't logged in, try to log them in
if(!isset($_SESSION['user_id'])){
if(isset($_POST['submit'])) {
	
	//connect to the database
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)or die("Could not load page");


	  $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
	
if(!empty($myusername) && !empty($mypassword)){  // here

 //Look up the username and password in the database
 $query = "SELECT user_id, username FROM ethek_user WHERE username='$myusername' AND password=SHA('$mypassword')";
 $data = mysqli_query($dbc,  $query); 
 

 if(mysqli_num_rows($data) == 1){
  //the log in is OK so set the user ID and username session vars (and cookies) redirect to home page
	$row = mysqli_fetch_array($data);
	$_SESSION['myusername'] = $row['username'];
	$_SESSION['user_id'] = $row['user_id'];
	setcookie('user_id',$row['user_id'], time()+(60*60*24*30)); //expires in 30 days
	setcookie('username',$row['username'], time()+(60*60*24*30)); //expires in 30 days
    header("location:./viewprofile.php");

 }else{
  //The username/password are Incorrect so set an error msg
    $error_msg = 'Sorry, you must enter a valid username and password to log in.';
 }
 
 }
 else{
	 //The username/password are Incorrect so set an error msg
    $error_msg = 'Sorry, you must enter a valid username and password to log in.';
  }
 }
}

 // mysqli_close($dbc);		
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
				Last Modified: 2017-02-01 (Thomas)
				Working: YES
						                                  -->
						
						
			<meta charset="UTF-8">
			
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			
			<title>Log In</title>

	</head>
	<body>
	
		<?php require_once 'templates/header.php';

				if (empty($_SESSION['user_id'])) {
			echo '<p class="error">' . $error_msg  . '</p>';
				}			
				
			?>
<div id="signup">
	<form method="post" action="<?php echo "signup.php"; ?>">
    <fieldset>
      <legend>Registration Info</legend>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" value="<?php if (!empty($username)) echo $username; ?>" />
		<select name="cars">
		 	<option value="apples1">apples1</option>
		  	<option value="apples2">apples2</option>
		  	<option value="apples3">apples3</option>
		  	<option value="apples4">apples4</option>
		</select><br />
      <label for="password1">Password:</label>
      <input type="password" id="password1" name="password1" /><br />
      <label for="password2">Password (retype):</label>
      <input type="password" id="password2" name="password2" /><br />
	  <label for="email"/>Email</label>
	  <input type="text" id="email" name="email">
	  	<p> Do you want to share your email with other users?
	   <input type="radio" name="gender" value="Yes">Yes
	   <input type="radio" name="gender" value="No">No
		</p><br />
   	  <label for="fname"/>First Name</label>
	  <input type="text" id="fname" name="fname"><br />
	  <label for="lname"/>Last Name</label>
	  <input type="text" id="lname" name="lname">
	  	<p> Do you want to share your first and last name with other users?
	  	<input type="checkbox" name="vehicle" value="fname">first name
		<input type="checkbox" name="vehicle" value="lname">last name
		</p><br />
	  <label for="ppic"/>Upload Picture</label>
	  <input type="file" id="ppic" name="ppic"><br /><br>
	   <textarea rows="4" cols="50">Tell us a little bit about yourself.
	   </textarea>
	   <p>Would you like to sign up for our newsletter?</p>
	   <input type="radio" name="gender" value="Yes">Yes
	   <input type="radio" name="gender" value="No">No
    </fieldset>
    <input type="submit" value="Register" name="signup" />
  </form>
	
		</div>

	<?php require_once 'templates/footer.php'; ?>