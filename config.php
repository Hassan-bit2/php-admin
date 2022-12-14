<?php
session_start();
// Connecting to the Database
$servername = "localhost";
$db_username = "root";
$db_password = "root";
$database = "address_book";

// Create a connection
$conn = mysqli_connect($servername, $db_username, $db_password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
     echo "Connection was successful<br>";
}

?>