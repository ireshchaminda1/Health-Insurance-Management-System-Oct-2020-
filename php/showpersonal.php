
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config1.php';

$sql = "SELECT nic,fname,lname,email,home,mobile,city FROM personal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>NIC</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Home</th>
	<th>Mobile</th>
	<th>City</th>
	<th>Edit</th>
	<th>Delete</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nic"]. "</td>
		<td>" . $row["fname"]."</td>
		<td>" . $row["lname"]. "</td>
		<td>" . $row["email"]."</td>
		<td>" . $row["home"]."</td>
		<td>" . $row["mobile"]."</td>
		<td>" . $row["city"]."</td>
		<td><input type='button' name='Edit' value='Update' id='personal' onclick=\"editpage('personal')\"></td>
		<td><a href=deletepersonal.php?delete=".$row['nic']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></tr>";
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
