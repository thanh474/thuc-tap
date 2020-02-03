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
$user = $_POST['user'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM acount where user ='$user' and pass = '$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    include "login2.php";
}
else{
    include "acou.php";  
}



$conn->close();
?>