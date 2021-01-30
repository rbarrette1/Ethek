<?php
  session_start();
  

  // If the session vars aren't set, try to set them with a cookie
  if (isset($_SESSION['user_id'])) {
		header("location:./index.php");
  }

  require_once('php/connectvars.php');

  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['signup'])) {
    // Grab the profile data from the POST
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
	$fname = mysqli_real_escape_string($dbc, trim($_POST['fname']));
	$lname = mysqli_real_escape_string($dbc, trim($_POST['lname']));
	$email = mysqli_real_escape_string($dbc, trim($_POST['email']));

    if (!empty($username) && !empty($password1) && !empty($password2) && ($password1 == $password2)) {
      // Make sure someone isn't already registered using this username
      $query = "SELECT * FROM ethek_user WHERE username = '$username'";
      $data = mysqli_query($dbc, $query);
      if (mysqli_num_rows($data) == 0) {
        // The username is unique, so insert the data into the database
        $query = "INSERT INTO ethek_user (username, password, join_date, email, first_name, last_name) VALUES ('$username', SHA('$password1'), NOW(), '$email','$fname', '$lname' )";
        mysqli_query($dbc, $query);

        // Confirm success with the user
        echo '<p>Your new account has been successfully created. You\'re now ready to <a href="login.php">log in</a>.</p>';

        mysqli_close($dbc);
		header("location:./login.php");
        exit();
      }
      else {
        // An account already exists for this username, so display an error message
        echo '<p class="error">An account already exists for this username. Please use a different address.</p>';
        $username = "";
      }
    }
    else {
      echo '<p class="error">You must enter all of the sign-up data, including the desired password twice.</p>';
    }
  }

  mysqli_close($dbc);
?>



