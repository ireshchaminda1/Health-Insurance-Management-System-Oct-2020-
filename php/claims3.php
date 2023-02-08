<?php
require 'config.php';

if(isset($_POST['btsubmit'])){

$date=$_POST['dates'];
$dillness=$_POST['illness'];
$dates1=$_POST['fname'];
$dates2=$_POST['fname2'];
$info=$_POST['info'];


$sql="INSERT INTO claim3(i_date,idate1,h_date1,h_date2,info) VALUES('$date','$dillness','$dates1','$dates2','$info')";

if($conn->query($sql)){

    echo"<script type='text/javascript'>
    alert('Inserted Sucessfully!!');
    window.location ='../html/claims4.html';
</script> ";
}
else{
    echo "Error:".$conn->error;
}
$conn->close();




}

?>