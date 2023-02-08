
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config1.php';

$sql = "SELECT name,email FROM signup";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
	<tr><th>Name</th>
	<th>Email</th>
	<th>Delete</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td>
		<td>" . $row["email"]."</td>
		<td><a href=deletemain.php?delete=".$row['email']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>
