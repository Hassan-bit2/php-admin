<?php

include ("config.php");

$sql = "SELECT id, username, password, is_admin FROM login_details";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<body>
<section>
<table>
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>is_admin</th>
    </tr>

<?php
$sql = "SELECT id, username, password, is_admin FROM login_details";
$result = $conn->query($sql);

if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()) {
		echo "<tr><td>". $row["id"] ."</td><td>". $row["username"] ."</td><td>". $row["password"] ."</td><td>" .$row["is_admin"] ."</td><td>" .$row["delete"] ."</td></tr>";
	}
	echo "</table>";
}
else {
	echo "0 result";
}

$conn-> close();
?>


</section>
</body>
