<?php

include('main/simple_html_dom.php');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$alldata=[];
$html = @file_get_html('http://www.nepalstock.com/todaysprice/export');

error_reporting(E_ALL ^ E_NOTICE);  

$error = error_get_last();
     // Fatal error, E_ERROR === 1
    if ($error['type'] === E_ERROR) {
         echo "Server is currently unavailabe,Please try again later.";
    }

foreach($html->find('tr') as $data) {
    $item['title']   = $data->find('td', 0)->plaintext;
    $item['tradecompany']    = $data->find('td[2]', 0)->plaintext;
    $item['nooftransaction'] = $data->find('td[3]', 0)->plaintext;
    $item['maxprice'] = $data->find('td[4]', 0)->plaintext;
    $item['minprice'] = $data->find('td[5]', 0)->plaintext;
    $item['closingprice'] = $data->find('td[6]', 0)->plaintext;
    $item['tradedshares'] = $data->find('td[7]', 0)->plaintext;
    $item['amount'] = $data->find('td[8]', 0)->plaintext;
    $item['previousclosing'] = $data->find('td[9]', 0)->plaintext;
    $item['difference'] = $data->find('td[10]', 0)->plaintext;
    $alldata[] = $item;
}

echo json_encode($alldata);

?>
