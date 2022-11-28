<?php
//session_start();
// Connecting to the Database
$servername = "localhost";
$db_username = "root";
$db_password = "root";
$database = "php_form";

// Create a connection
$conn = mysqli_connect($servername, $db_username, $db_password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was successful<br>";
}

// Create a table in the db
/*
$sql = "CREATE TABLE `login_details` ( `username` INT(6) NOT NULL AUTO_INCREMENT  , `password` VARCHAR(12) NOT NULL , PRIMARY KEY (`username`))";
$result = mysqli_query($conn, $sql);
*/

/*
// Sql query to be executed
$sql = "INSERT INTO `login_details` (`username`, `password`) VALUES ('$username', '$password')";
$result = mysqli_query($conn, $sql);

// Add a new trip to the Trip table in the database
if($result){
    echo "The record has been inserted successfully successfully!<br>";
}
else{
    echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
}
*/


?>
