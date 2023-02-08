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

<h1 style="font-size:30px text-align:center;" > USER LOGIN DETAILS <h1>
<?php

require 'config.php';



$sql = "SELECT  username,l_password,dates,times1  FROM logdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th> User name </th><th>Password </th> <th> date of login  </th> <th>  time of login  </th>  </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["username"]. "</td><td>" . $row["l_password"]. "</td><td> " . $row["dates"]."</td><td>".$row["times1"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
<a href="phphome.php" class="button delete" > Back to ADMIN HOME </a>
</body>
</html>