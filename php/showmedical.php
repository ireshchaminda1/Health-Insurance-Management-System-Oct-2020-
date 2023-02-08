
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config1.php';

$sql = "SELECT nic,medical,medical2,medical3,medical4,medical5,tobaccouser FROM medicalcondition";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>NIC</th>
	<th>Hear Condition Problem</th>
	<th>Stroke</th>
	<th>Cancer</th>
	<th>Diabetes</th>
	<th>Mental Illness</th>
	<th>Tobacco User</th>
	<th>Delete</th>
	</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nic"]. "</td>
		<td>" . $row["medical"]."</td>
		<td>" . $row["medical2"]. "</td>
		<td>" . $row["medical3"]."</td>
		<td>" . $row["medical4"]."</td>
		<td>" . $row["medical5"]."</td>
		<td>" . $row["tobaccouser"]."</td>
		<td><input type='button' name='Edit' value='Update' id='emp' onclick=\"editpage('emp')\"></td>
		<td><a href=deletemedical.php?delete=".$row['nic']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></tr>";
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
