<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
</head>
<body>



<?php

require 'config.php';



$sql = "SELECT firstname,lastname,dates,gender,street_address,st2,city,p_code,ptnumber,stad,paitientsrel FROM claims";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center> <table><tr> <th>first name </th> <th> Last name </th> <th> Birthday   </th> <th> Gender   </th> <th> steet address</th><th> street addres line 2 </th> <th> city  </th>
    <th> Postal code   </th> <th> Phone number   </th> <th> Street Address  </th> <th>paitient's relationship to insuer </th> </tr> </center>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["firstname"]. "</td>
        <td>" . $row["lastname"]. "</td>
        <td> " . $row["dates"]."</td>
        <td>".$row["gender"] ."</td>
        <td>".$row["street_address"] ."</td>                           
        <td>".$row["st2"] ."</td>
        <td>".$row["city"] ."</td>
        <td>".$row["p_code"] ."</td>
        <td>".$row["ptnumber"] ."</td>
        <td>".$row["stad"] ."</td>
        <td>".$row["paitientsrel"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
 
<br><br><br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <lable><h2> Enter the phone number of userI</h2> </lable>
        <input type ="text" name="phnm"  >

		<input type="submit" value="Delete Details" name="subb"class="button delete"  >
		
	</form>

                                         
<?php
require 'config.php';

if(isset($_POST["subb"])){
    $phnum=$_POST["phnm"];
    


	if($phnum!=""){
    
        $sql = "delete from claim where ptnumber='$phnum'";

        if($conn->query($sql)){
                     
                     echo"<script type='text/javascript'>
                     alert('Deleted user details Sucessfully!!');
                     window.location ='claim1admin.php';
                 </script> ";
        }
        
        else{
             echo "Error: ".$conn->error;
        }

	}	

}
$conn->close();

?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>