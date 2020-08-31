<?php

include('main/simple_html_dom.php');

@$symbol=$_GET['symbol'];

if (isset($symbol))
    {
    $alldata=[];
    $html = @file_get_html('http://www.nepalstock.com/todaysprice?stock-symbol='.$symbol.'');


    error_reporting(E_ALL ^ E_NOTICE);  

    $error = error_get_last();
         // Fatal error, E_ERROR === 1
        if ($error['type'] === E_ERROR) {
             echo "Server is currently unavailabe,Please try again later.";
        }


    // Find all article blocks
    foreach($html->find('tr[3]') as $article) {
        $item['title']   = $article->find('td', 0)->plaintext;
        $item['tradecompany']    = $article->find('td[2]', 0)->plaintext;
        $item['nooftransaction'] = $article->find('td[3]', 0)->plaintext;
        $item['maxprice'] = $article->find('td[4]', 0)->plaintext;
        $item['minprice'] = $article->find('td[5]', 0)->plaintext;
        $item['closingprice'] = $article->find('td[6]', 0)->plaintext;
        $item['tradedshares'] = $article->find('td[7]', 0)->plaintext;
        $item['amount'] = $article->find('td[8]', 0)->plaintext;
        $item['previousclosing'] = $article->find('td[9]', 0)->plaintext;
        $item['difference'] = $article->find('td[10]', 0)->plaintext;
        $alldata[] = $item;
    }

    echo json_encode($alldata);
}
else
{
    echo "No value entered please check the readme file";
}

?>
