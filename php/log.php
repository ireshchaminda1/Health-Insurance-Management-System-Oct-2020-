<?php

require 'config.php';


if(isset($_POST['btsubmit'])){

    date_default_timezone_set("Asia/colombo");

$uname=$_POST['username'];
$pw=$_POST['password'];
$date=date("Y/m/d") ;

date_default_timezone_set("Asia/colombo");
$time=date("h:i:sa");

$sql ="INSERT INTO logdetails(username,l_password,dates,times1) VALUES ('$uname','$pw','$date','$time')";


    
 $query="SELECT * from signup WHERE email='$uname' and password='$pw'";
 $result=mysqli_query($conn,$query);
 $count=mysqli_num_rows($result);
 

if($count>0){
 
    $conn ->query($sql);

    echo "<script type='text/javascript'>
    alert('login sucessful');
    window.location='../html/home.html';
    </script>";
    
    $conn ->query($sql);
 
}
else{
    echo"<script type='text/javascript'>
    alert('Invalid password or User name');
    window.location='../html/login.html';
    </script>";
}
       
    }
$conn->close();







?>