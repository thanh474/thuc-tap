<?php
$servername = "localhost";
$username = "root";
$password = "iou";
$dbname = "corona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$cof =[];
for ($i=1; $i <=15 ; $i++) { 
    $result = mysqli_query($conn, "SELECT SUM(Confirmed) as tong FROM `$i` ");
    while ($row = @mysqli_fetch_assoc($result)){
         $tata = $row['tong'];
         array_push($cof, $tata);
    };
};
$def=[];
for ($i=1; $i <=15 ; $i++) { 
    $res= mysqli_query($conn, "SELECT SUM(Deaths) as tong FROM `$i`");
    while ($row = @mysqli_fetch_assoc($res)){
         $ta = $row['tong'];
         array_push($def, $ta);
    };
};
$ref=[];
for ($i=1; $i <=15 ; $i++) { 
    $rest= mysqli_query($conn, "SELECT SUM(Recovered) as tong FROM `$i`");
    while ($row = @mysqli_fetch_assoc($rest)){
         $tat = $row['tong'];
         array_push($ref, $tat);
    };
};

?>