<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/table.css">

    <style>
           body{

                 background-image:url('../img/php1.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;

           }

        </style>
</head>
<body>

<h1 style="font-size:30px text-align:center;" >BILLING DETAILS <h1>
<?php

require 'config.php';



$sql = "SELECT acnum, bank, t_charge,amount,balance,info FROM claim4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Account number </th> <th> bank   </th> <th> total charge   </th> <th> total amount   </th> <th> Balance </th><th> provider's info </th> </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["acnum"]. "</td>
        <td>" . $row["bank"]. "</td>
        <td> " . $row["t_charge"]."</td>
        <td>".$row["amount"] ."</td>
        <td>".$row["balance"] ."</td>
        <td>".$row["info"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

<br>
<fieldset>
<legend> Delete User information </legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        
        <p> Enter Account Number : </P><input type="text" class="type" name="acnum"><BR />
        
</fieldset>

		<input type="submit" value="Delete" name="btnnSubmit" class="button delete">
		
	</form>



<?php
require 'config.php';

if(isset($_POST["btnnSubmit"])){
    $acnum=$_POST["acnum"];
    


	if($acnum!=""){
    
        $sql = "delete from claim4 where acnum='$acnum'";

        if($conn->query($sql)){
                     
                     echo"<script type='text/javascript'>
                     alert('Deleted Sucessfully!!');
                     window.location ='claim4admin.php';
                 </script> ";
        }
        
        else{
             echo "Error: ".$conn->error;
        }

	}	

}
$conn->close();

?>

<a href="phphome.php" class="button delete" > Back to ADMIN HOME </a>
</body>
</html>