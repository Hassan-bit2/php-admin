<?php session_start(); ?>
<html>
<body>

<?php 
    if(isset($_SESSION['status']))
    {
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

</div>
<?php
	unset($_SESSION['status']);
    }
?>

<form action="code.php" method="POST">
<label for="">Deleting_id</label>
<input type="text" name="delete_id">
<button type="submit" name="delete_btn">Delete Data</button>
</form>