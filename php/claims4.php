
<html>
<head>
 <link rel="stylesheet" href="../css/claim4php.css">
    <style>
        body{
    background-image: url('../img/php3.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;

}
        </style>
</head>
<body>

<?php
require 'config.php';

if(isset($_POST['btsubmit'])){

$acnum=$_POST['fname'];
$sel =$_POST['banks'];
$tcharge=$_POST['fname2'];
$amount=$_POST['fname3'];
$balance=$_POST['fname4'];
$info=$_POST['info'];

$sql ="INSERT INTO claim4(acnum,bank,t_charge,amount,balance,info) VALUES('$acnum','$sel','$tcharge','$amount','$balance','$info')";



if($conn->query($sql)){

    echo "Inserted sucessfully";
    echo "<h2>Bellow is the form data You entered </h2>";
      echo "<hr>";
      echo"<p>";
      echo "</br>Your account number is :{$_POST['fname']}";
      echo "</br>Your bank is :{$_POST['banks']}";
      echo "</br>Your total charge :{$_POST['fname2']}";
      echo "</br>Your amount :{$_POST['fname3']}";
      echo "</br>Your balance :{$_POST['fname4']}";
      echo"</p>";
      echo "<hr>";
}
else{
    echo "Error:".$conn->error;
}

$conn->close();

}

?>



<p style="font-size:30px;font-weight:bold; ">If you entered invalid account number please update from here</p>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <fieldset>
            <legend>UPDATE YOUR ACCOUNT NUMBER</legend>
        <lable>Enter your account number you entered ealier</lable><br>
        <input type="text" name="number"> <br>
        <lable> Enter the new account number </lable><br>
        <input type="text" name="update"> <br> <br>
        <lable for="bank">Select your bank </lable> </br>
      <select name="banks" style="width:300px; height:40px;">
        <option value=""></option>
        <option value="Bank of Ceylon">Bank of Ceylon</option>
        <option value="Commercial Bank of Ceylon PLC">Commercial Bank of Ceylon PLC</option>
        <option value="Sampath Bank PLC">Sampath Bank PLC</option>
       
      </select>
    </fieldset> <br> 
    <input type="submit" value="UPDATE" name="btnssubmit" class="button update">

</form>
<?php



require 'config.php';

if(isset($_POST["btnssubmit"])){
    $acnum=$_POST["number"];
    $newac=$_POST["update"];
    $bank=$_POST["banks"];

	if($acnum!=""){
    
        $sql = "UPDATE claim4 SET acnum='$newac', bank='$bank' WHERE acnum='$acnum'";

        if($conn->query($sql)){
                     echo "Updated successfully<BR />";
        }else{
             echo "Error: ".$conn->error;
        }

	}	
    $sql = "SELECT acnum, bank, t_charge,amount,balance,info FROM claim4 WHERE acnum='$newac'";
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
}


$conn->close();


?>
<?php
}
?>
<br>
 <a href="phphome.php" class="button update" > Back to HOME </a>
</body>


</html>