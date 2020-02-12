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
header("Content-type: text/xml");
echo "<?xml version='1.0' ?>";
echo '<markers>';
$result = mysqli_query($conn, "SELECT SUM(Confirmed) as tong FROM hienthi;");
while ($row = @mysqli_fetch_assoc($result)){
     echo '<marker ';
     echo 'Confirmed= "' . $row['tong'] . '" ';
     echo '/>';
}

$ttdeat = mysqli_query($conn, "SELECT SUM(Deaths) as deat FROM hienthi;");
while ($row = @mysqli_fetch_assoc($ttdeat)){
     //$totaldeath = $row['deat'];
     echo '<marker ';
     echo 'Deaths= "' . $row['deat'] . '" ';
     echo '/>';
}
$ttrec = mysqli_query($conn, "SELECT SUM(Recovered) as rec FROM hienthi;");
while ($row = @mysqli_fetch_assoc($ttrec)){
     //$totalrec = $row['rec'];
     echo '<marker ';
     echo 'Recovered= "' . $row['rec'] . '" ';
     echo '/>';
}
echo '</markers>';
$tata = 600;
$conn->close();

?>