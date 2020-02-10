<?php
$servername = "localhost";
$username = "root";
$password = "iou";
$dbname = "corona";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/* Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
*/

$result = mysqli_query($conn, "SELECT SUM(Confirmed) as tong FROM hienthi;");
while ($row = @mysqli_fetch_assoc($result)){
     $tata = $row['tong'];
}

$ttdeat = mysqli_query($conn, "SELECT SUM(Deaths) as deat FROM hienthi;");
while ($row = @mysqli_fetch_assoc($ttdeat)){
     $totaldeath = $row['deat'];
}
$ttrec = mysqli_query($conn, "SELECT SUM(Recovered) as rec FROM hienthi;");
while ($row = @mysqli_fetch_assoc($ttrec)){
     $totalrec = $row['rec'];
}

$conn->close();
?>