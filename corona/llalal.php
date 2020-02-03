<?php
require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}

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

// Select all the rows in the markers table
$query = "SELECT * FROM markers INNER JOIN data USING(ProvinceState)";
$result = mysqli_query($connection, $query);
//$result =  sprintf("SELECT * FROM markers WHERE 1");
if (!$result) {
  die('Invalid query: ' . mysqli_connect_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;
// Iterate through the rows, printing XML nodes for each
//while ($row = $result->fetch_assoc()){
while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  echo '<marker ';
  echo 'ProvinceState="' . parseToXML($row['ProvinceState']) . '" ';
  echo 'lat="' . $row['lat'] . '" ';
  echo 'lng="' . $row['lng'] . '" ';
  echo 'CountryRegion="' . parseToXML($row['CountryRegion']) . '" ';
  echo 'LastUpdate="' . parseToXML($row['LastUpdate']) . '" ';
  echo 'Confirmed="' . $row['Confirmed'] . '" ';
  echo 'Deaths="' . $row['Deaths'] . '" ';
  echo 'Recovered="' . $row['Recovered'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}
// End XML file
echo '</markers>';
?>
