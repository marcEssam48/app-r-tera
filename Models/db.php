<?php

include 'database.php';

$db = new database();



$sql= "SELECT * FROM user";
$result = mysqli_query($db->connects,$sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo $row['username'];
        echo "<br>";
    }

}
?>