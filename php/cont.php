<!doctype html>
<html>
<head>
<link rel="stylesheet" href="../css/phptablecss.css">
<script src="../js/admin.js"></script> 
    <style>
           body{

                 background-image:url('../images/h.jpg');
                 background-repeat: no-repeat;
                 background-attachment: fixed;
                 background-size: cover;

           }

        </style>
</head>
<body>


<?php

require 'config.php';



$sql = "SELECT faname,fame,email,massages FROM contact";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<center><table><tr> <th>first name </th> <th> Last name </th> <th> email  </th>
    <th>  massages </th>  </tr> </center>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["faname"]. "</td>
        <td>" . $row["fame"]. "</td>
        <td> " . $row["email"]."</td>
        <td>".$row["massages"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}                                       


$conn->close();
?>
<button id="" onclick="backtoadmin()">Back to Admin Home</button>
</body>
</html>