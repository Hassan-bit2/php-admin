<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $db_username = $_POST["username"];
    $db_password = $_POST["password"]; 
    
     
    $sql = "Select * from user_login where username='$db_username' AND password='$db_password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: display.php");
		//echo "success";
    } 
    else{
        echo "Invalid Credentials";
    }
}
    
?>

<html>
<body>

	
	<div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="login.php" method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
       
         <br>
        <button type="submit" class="btn btn-primary">Login</button>
		
		<a href="http://127.0.0.1/address%20book/user/signup.php">
		<button type="submit"> Sign up
		</a>
		</button>
		
	 </form>
    </div>

</body>
</html>