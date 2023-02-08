<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>

<?php

require 'config.php';

$sql = "SELECT NIC,Firstname,Lastname,Birth,Gender,Email,Mobiletel,Hometel,Streetaddress1,Streetaddress2,City,Province,Postalcode FROM registration";
$result = $conn->query($sql);

if($result->num_rows>0){
	echo "<table><tr><th>NIC</th><th>FIRSTNAME</th><th>LASTNAME</th><th>BIRTH</th><th>GENDER</th><th>EMAIL</th><th>MOBILETEL</th><th>HOMETEL</th><th>STREETADDRESS1</th><th>STREETADDRESS2</th><th>CITY</th><th>PROVINCE</th><th>POSTALCODE</th><th>Edit</th><Delete</th></tr>";
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["NIC"]."</td><td>".$row["Firstname"]."</td><td>".$row["Lastname"]."</td><td>".$row["Birth"]."</td><td>".$row["Gender"]."</td><td>".$row["Email"]."</td><td>".$row["Mobiletel"]."</td><td>".$row["Hometel"]."</td><td>".$row["Streetaddress1"]."</td><td>".$row["Streetaddress2"]."</td><td>".$row["City"]."</td><td>".$row["Province"]."</td><td>".$row["Postalcode"]."</td><td><input type='button' name='Edit' value='Update' id='recovery' onclick=\"editpage('recovery')\"></td><td><a href=Registrationdelete.php?delete=".$row['NIC']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></td></tr>";
		
	}
	echo "</table>";
}else{
	echo "0 results";
}
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>