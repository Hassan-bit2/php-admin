<?php
include ("config.php");
session_start();
$con = mysqli_connect("localhost","root","root","address_book");

if(isset($_POST['delete_btn']))
{
    $firstname = $_POST['delete_name'];

    $query = "DELETE FROM address_book_details WHERE firstname='$firstname' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Deleted Successfully";
        header("Location: index.php");
    }
    else
    {
        $_SESSION['status'] = "Data Not Deleted";
        header("Location: index.php");
    }
}

?>