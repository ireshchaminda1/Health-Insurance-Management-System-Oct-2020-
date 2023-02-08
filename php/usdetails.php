<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/phpstyle.css">
<script src="../js/script1.js"></script> 
    <style>
           body{

                 background-image:url('../img/h.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;

           }

        </style>
</head>
<body>


<form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<br> <br> <br> <br> <br>   <center><b>Enter your Phone number  </b><input type="text" class="pho" name="phnm" placeholder="07******* "/>

 <input type="submit" name="subb" value="CLICK HERE TO GET DETAILS"   >  <br>  <br> <br>
 
 
  </form>

<?php

require 'config.php';

if(isset($_POST['subb'])){
$phnum =$_POST['phnm'];

if($phnum!=""){
$sql = "SELECT fname,lname,dob,gender,nic,email,home,mobile,street1,street2,city,province,pcode FROM personal WHERE mobile='$phnum' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


while($row = $result->fetch_assoc()) {
echo "First name :" . $row["fname"]. "<br>
Last name :" . $row["lname"]. "<br>
Birthday : " . $row["dob"]."<br>
Gender".$row["gender"] ."</br>
NIC :".$row["nic"] ."<br>                           
E-mail :".$row["email"] ."<br>
City :".$row["city"] ."</td>
Home number :".$row["home"] ."<br>
Phone number ".$row["mobile"] ."<br>
Street Address line 1".$row["street1"] ."<br>
Street Adress line 2 :".$row["street2"] ."<br>
City  :".$row["city"] ."<br>
province :".$row["province"] ."<br>
Postal code :".$row["pcode"] . "<br><br>";
}
}
}
}
$conn->close();


?>



<lable ><h2> Update your Email if you want </h2> <lable> <br> <br> <br> <br>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<lable><b>Enter your phone number</b></lable>

<input type="text" name="pnum"> <br>  <br>

<lable><b>Enter your new E mail </b></lable>

<input type="text" name="news">

<input type="submit" value="Update" name="subbm">

</form> </center>


<?php

require 'config.php';

if (isset($_POST['subbm'])){
    $phnum=$_POST['pnum'];
    $stadd=$_POST['news'];


	if($phnum!=""){
    
        $sql = "UPDATE personal SET email='$stadd' WHERE mobile='$phnum'";

        if($conn->query($sql)){
                     echo "Updated successfully<BR />";
        }
        else{
             echo "Error: ".$conn->error;
        }

    }

    $sql = "SELECT fname,lname,dob,gender,nic,email,home,mobile,street1,street2,city,province,pcode FROM personal WHERE mobile='$phnum' ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    
    
    while($row = $result->fetch_assoc()) {
    echo "First name :" . $row["fname"]. "<br>
    Last name :" . $row["lname"]. "<br>
    Birthday : " . $row["dob"]."<br>
    Gender".$row["gender"] ."</br>
    NIC :".$row["nic"] ."<br>                           
    E-mail :".$row["email"] ."<br>
    City :".$row["city"] ."</td>
    Home number :".$row["home"] ."<br>
    Phone number ".$row["mobile"] ."<br>
    Street Address line 1".$row["street1"] ."<br>
    Street Adress line 2 :".$row["street2"] ."<br>
    City  :".$row["city"] ."<br>
    province :".$row["province"] ."<br>
    Postal code :".$row["pcode"] . "<br><br>";
    }
    }

    }

    

$conn->close();

?>
<center><button class="" id="consult" onclick="backtohome()">Back To Home Page</button><br><br></center>
</body>
</html>