<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config.php';

$sql = "SELECT firstName,lastName,Email,MobileNo,FEEDBACK FROM feedback";
$result = $conn->query($sql);

if($result->num_rows>0){
	echo "<table><tr><th>FIRSTNAME</th><th>LASTNAME</th><th>EMAIL</th><th>MOBILENO</th><th>FEEDBACK</th><th>Edit</th><Delete</th></tr>";
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["Email"]."</td><td>".$row["MobileNo"]."</td><td>".$row["FEEDBACK"]."</td><td><input type='button' name='Edit' value='Update' id='feedback' onclick=\"editpage('feedback')\"></td><td><a href=FBdelete.php?delete=".$row['Email']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></td></tr>";
		
	}
	echo "</table>";
}else{
	echo "0 results";
}
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>
