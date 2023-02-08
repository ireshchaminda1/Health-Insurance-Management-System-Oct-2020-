
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/phptablecss.css">
<link rel="stylesheet" href="../css/cssphphome.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config1.php';

$sql = "SELECT nic,status,empname,mobile,home,city,salary,wagetype,worktype,selfincome FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>
	<th>NIC</th>
	<th>Status</th>
	<th>Employee Name</th>
	<th>Fixed</th>
	<th>Mobile</th>
	<th>City</th>
	<th>Salary</th>
	<th>Wage Type</th>
	<th>Work Type</th>
	<th>Self Income</th>
	<th>Update</th>
	<th>Delete</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nic"]. "</td>
		<td>" . $row["status"]."</td>
		<td>" . $row["empname"]. "</td>
		<td>" . $row["home"]."</td>
		<td>" . $row["mobile"]."</td>
		<td>" . $row["city"]."</td>
		<td>" . $row["salary"]."</td>
		<td>" . $row["wagetype"]."</td>
		<td>" . $row["worktype"]."</td>
		<td>" . $row["selfincome"]."</td>
		<td><input type='button' name='Edit' value='Update' id='emp' onclick=\"editpage('emp')\"></td>
		<td><a href=deleteemployee.php?delete=".$row['nic']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></tr>";
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