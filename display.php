<?php
SESSION_START();
include ("config.php");

?>

<html>
<body>
<section>
<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Mobile no.</th>
		<th>Address</th>
		<th>Office</th>
		<th>Blood Group</th>
	</tr>

<?php
$sql = "SELECT * FROM address_book_details";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["firstname"] ."</td><td>". $row["lastname"] ."</td><td>". $row["mobileno"] ."</td><td>" .$row["address"] ."</td><td>" .$row["office"] ."</td><td>". $row["bloodgroup"]."</td></tr>";
		//header("address_book.php");
	}
	echo "</table>";
}
else {
	echo "0 result";
}

$conn-> close();
?>

<a href="http://127.0.0.1/address%20book/user/address_book.php">
		<button type="submit"> Back to Entry Form
		</a>
		</button>

</section>
</body>
</html>