<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config.php';

$sql = "SELECT Name,Email FROM consult";
$result = $conn->query($sql);

if($result->num_rows>0){
	echo "<table><tr><th>NAME</th><th>EMAIL</th><th>Edit</th><Delete</th></tr>";
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td><input type='button' name='Edit' value='Update' id='consult' onclick=\"editpage('consult')\"></td><td><a href=condelete.php?delete=".$row['Email']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></td></tr>";
		
	}
	echo "</table>";
}else{
	echo "0 results";
}
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>