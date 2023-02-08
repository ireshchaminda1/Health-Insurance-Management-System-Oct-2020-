<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="../css/table.css">
    <style>
        body{
            background-image:url('../img/php2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;

        }
        </style>
</head>
<body>

<h1 style="font-size:30px text-align:center;" >ILLNESS AND INJURY DETAILS <h1>
<?php

require 'config.php';



$sql = "SELECT i_date,idate1,h_date1,h_date2,info FROM claim3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th> Date of illness </th><th>Dates paitient unable to work  </th> <th> Hospitalization date 1  </th> <th>  Hospitalization date 2  </th> <th> Info </th>  </tr>";
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["i_date"]. "</td><td>" . $row["idate1"]. "</td><td> " . $row["h_date1"]."</td><td>".$row["h_date2"] ."</td><td>".$row["info"] ."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
 <a href="phphome.php" class="button update" > Back to ADMIN HOME </a>
</body>
</html>