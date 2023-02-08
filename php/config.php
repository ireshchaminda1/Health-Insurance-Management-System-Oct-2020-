<?php
$servername="localhost";
$username="root";
$password="";
$dbname="regpersonal";


$conn=new mysqli($servername,$username,$password,$dbname);


if($conn->connect_error){

    die("Connection error".$conn->connect_error);
}



?>