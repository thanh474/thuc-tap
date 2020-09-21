<?php
require("phpsqlajax_dbinfo.php");



// Opens a connection to a MySQL server
$connection=mysqli_connect ('localhost', $username, $password, $database);

if (!$connection) {
  die('Not connected : ' . mysqli_connect_error());
}

// Set the active MySQL database
$db_selected = mysqli_select_db($connection, $database);
if (!$db_selected) {
  die('Cant use db : ' . mysqli_connect_error());
}

$Deaths = "Deaths";
// Select all the rows in the markers table

$tav = 16;
$sql  = "CREATE TABLE `corona`.`$tav` ( `ProvinceState` VARCHAR(100) NOT NULL , `CountryRegion` VARCHAR(255) NOT NULL , `Last Update` VARCHAR(100) NOT NULL , `Confirmed` INT(100) NULL DEFAULT NULL , `Deaths` INT(100) NULL DEFAULT NULL , `Recovered` INT(100) NULL DEFAULT NULL,  PRIMARY KEY (`ProvinceState`) ) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_vietnamese_ci;";
$lafla ="INSERT INTO `$tav`(`ProvinceState`, `CountryRegion`, `Last Update`, `Confirmed`, `Deaths`, `Recovered`) 
SELECT `ProvinceState`, `CountryRegion`, `Last Update`, `Confirmed`, `Deaths`, `Recovered` FROM `hienthi` ;";
$result = mysqli_query($connection, $sql);
//$result = mysqli_query($connection, $lafla);
//$result =  sprintf("SELECT ProvinceState, Deaths FROM data ORDER BY data.Deaths  DESC");
if (!$result) {
  die('Invalid query: ' . mysqli_connect_error());
}


$ind=0;
// Iterate through the rows, printing XML nodes for each
//while ($row = $result->fetch_assoc()){
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  //echo 'ProvinceState="' . parseToXML($row['ProvinceState']) . '" ';
  echo 'Deaths="' . $row['Deaths'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}

?>
