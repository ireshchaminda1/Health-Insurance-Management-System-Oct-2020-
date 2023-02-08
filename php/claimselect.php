<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>
<?php

require 'config.php';

$sql = "SELECT IID,IPNUM,FIRSTNAME,LASTNAME,DOB,GENDER,ADDRESSLINE1,ADDRESSLINE2,CITY,PROVINCE,POSTALCODE,MOBILENUMBER,HOME,INSURANCEPLAN FROM claim";
$result = $conn->query($sql);

if($result->num_rows>0){
	echo "<table><tr><th>INSURANCEID</th><th>POLICYID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>DOB</th><th>GENDER</th><th>ADDRESSLINE1</th><th>ADDRESSLINE2</th><th>CITY</th><th>PROVINCE</th><th>POSTALCODE</th><th>MOBILENUMBER</th><th>HOMENUMBER</th><th>PLANTYPE</th><th>Edit</th><Delete</th></tr>";
	//output data of each row
	while($row = $result->fetch_assoc()){
		echo "<tr><td>".$row["IID"]."</td><td>".$row["IPNUM"]."</td><td>".$row["FIRSTNAME"]."</td><td>".$row["LASTNAME"]."</td><td>".$row["DOB"]."</td><td>".$row["GENDER"]."</td><td>".$row["ADDRESSLINE1"]."</td><td>".$row["ADDRESSLINE2"]."</td><td>".$row["CITY"]."</td><td>".$row["PROVINCE"]."</td><td>".$row["POSTALCODE"]."</td><td>".$row["MOBILENUMBER"]."</td><td>".$row["HOME"]."</td><td>".$row["INSURANCEPLAN"]."</td><td><input type='button' name='Edit' value='Update' id='claim' onclick=\"editpage('claim')\"></td><td><a href=claimdelete.php?delete=".$row['IID']." onclick=\"return confirm('Are You Sure?')\">Delete</a></td></td></tr>";
		
	}
	echo "</table>";
}else{
	echo "0 results";
}
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>
