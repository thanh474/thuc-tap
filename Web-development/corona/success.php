<?php
require __DIR__ . '/vendor/autoload.php';
$client = new \Google_Client();
$client -> setApplicationName('corona'); 
$client -> setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client -> setAccessType ('offline');
$client -> setAuthConfig(__DIR__. '/credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1HKg4-FJbtK0jgjW_-mPbdN7nC3TohnEWPoSqBlktf3A";

$range = "B2:B3";
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
if(empty($values)){
    print "no data found.\n";
} else{
    $mask = "%10s \n";
    foreach ($values as $row){
        echo sprintf($mask,  $row[0]);
    }
}
?>
<h1>Welcome to New World</h1>