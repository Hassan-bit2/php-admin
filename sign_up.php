<?php
include("config.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
		
        $sql = "INSERT INTO `user_login` (`username`, `password`) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);
		echo 'Account created successfully';
		
	
	}

?>

<html>
<body>
    
<form method="post">

<label for="name">Name</label><br>
<input type="text" name="username" required /><br>
<label for="password">Password</label><br>
<input type="password" name="password" required /><br>
<button type="submit" class="btn btn-primary">Signup</button>

</form>

</body>
</html>