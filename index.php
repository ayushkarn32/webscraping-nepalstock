<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEPSE API</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        .sub-container{
            padding: 20px;
        }
        .link{
            background-color: beige;
            font-size: 18px;
            padding: 5px;
            width: fit-content;      
        }
        .url{
            margin: 20px 10px;
        }
        pre{
            width: 200px;
        }
        .first-container,.second-container{
            padding: 10px;
        }
        .get{
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            display: inline-block;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .175rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            margin-right: 5px;
        }
        .ok{
           width: 10px;
            height: 10px;
            display: inline-block;
            font-size: 16px;
            font-family: Content-font, Roboto, sans-serif;
            font-weight: 400;
            line-height: 1.625;
            margin-right: 6px;
            border-radius: 50%;
            background-color: #26CB7C;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="sub-container">
            <h3>There are two endpoints which are currently available</h3>
                <ul>
                    <li>List of all the Company's transaction</li>
                    <li>Individual Company's current status</li>
                    <li>Floor sheet(Comming soon..)</li>
                </ul>
        </div>
        <div class="first-container">
            <div class="heading"><span class="get">Get</span> Today's Price</div>
            <div class="url">
                <code class="link">https://webscraping-nepalstock.herokuapp.com/allprice.php</code>
            </div>
            <div class="response">
                <div class="success">
                    <div>
                        <span class="ok"></span>200:OK </div>
                        <code>
                            <pre>
                            [
                                {
                                  "sno": 0,
                                  "tradecompany": "10% Nepal SBI Bank Debenture 2086",
                                  "nooftransaction": "4",
                                  "maxprice": "1045.00",
                                  "minprice": "1040.00",
                                  "closingprice": "1040.00",
                                  "tradedshares": "2000.00",
                                  "amount": "2080125.00",
                                  "previousclosing": "1060.00",
                                  "difference": "-20.00"
                                },
                                {
                                  "sno": 1,
                                  "tradecompany": "10% Prabhu Bank Debenture 2084 ",
                                  "nooftransaction": "2",
                                  "maxprice": "1041.00",
                                  "minprice": "1040.00",
                                  "closingprice": "1040.00",
                                  "tradedshares": "200.00",
                                  "amount": "208100.00",
                                  "previousclosing": "1040.00",
                                  "difference": "0.00"
                                },
                                {
                                  "sno": 2,
                                  "tradecompany": "10% Sunrise Debenture 2080",
                                  "nooftransaction": "2",
                                  "maxprice": "1026.00",
                                  "minprice": "1020.00",
                                  "closingprice": "1026.00",
                                  "tradedshares": "75.00",
                                  "amount": "76650.00",
                                  "previousclosing": "1040.00",
                                  "difference": "-14.00"
                                },
                                ...
                              ]
                            </pre>
                        </code>
                </div>
                <div class="failed"></div>
            </div>
        </div>
        <div class="second-container">
            <div class="heading"><span class="get">Get</span>Individual Company</div>
            <div class="url">
                <code class="link">https://webscraping-nepalstock.herokuapp.com/companyprice.php?symbol=yourdesiredcompany'ssymbol</code>
            </div>
            <div class="response">
                <div class="success">
                    <div class="none">
                         <span class="ok"></span>200:OK</div>
                    
                    <code class="code">
                        <pre>
                            [
                            {
                              "title": "1",
                               "tradecompany": "Agriculture Development Bank Limited",
                                "nooftransaction": "461",
                                "maxprice": "435.00",
                                "minprice": "421.00",
                                "closingprice": "428.00",
                                "tradedshares": "74820.00",
                                "amount": "31894898.00",
                                "previousclosing": "435.00",
                                "difference": "-7.00"
                             }
                         ]
                                                 
                        </pre>
                    </code>
                </div>
                <div class="failed"></div>
            </div>
        </div>
    </div>
</body>
</html>
