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

$result = mysqli_query($conn, "SELECT SUM(Confirmed) as tong FROM data;");
while ($row = @mysqli_fetch_assoc($result)){
     $tata = $row['tong'];
}

$ttdeat = mysqli_query($conn, "SELECT SUM(deaths) as deat FROM data;");
while ($row = @mysqli_fetch_assoc($ttdeat)){
     $totaldeath = $row['deat'];
}
$ttrec = mysqli_query($conn, "SELECT SUM(recovered) as rec FROM data;");
while ($row = @mysqli_fetch_assoc($ttrec)){
     $totalrec = $row['rec'];
}

$conn->close();
?>