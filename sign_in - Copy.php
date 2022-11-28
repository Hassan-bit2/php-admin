<?php
include ("config.php"); //To include config.php file in this file
?>

<html>
<body>

<h1>Sign in form</h1>

<form method="POST">
<label for="username">Username</label>
<input type='text' name="username"><br>
<label for="password">Password</label>
<input type='text' name='password'><br>
<input type='submit' value='submit' name='submit'><br><br>
</form>

<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
		

// Connecting to the Database
	  
	  // Create a connection 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `login_details` (`username`, `password`, `is_admin`) VALUES ('$username', '$password', 0)";
        $result = mysqli_query($conn, $sql);
		echo 'done';
	
	}
	
	// Validation
	
?>


		
		

</body>
</html>
