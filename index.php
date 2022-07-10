<?php 
header('Content-type: text/plain; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');
header('Access-Control-Allow-Headers: Content-Type');
//fetching data from URL
$URL = "https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml";
$local_file = "./produkty-dlabystrzakow.xml";
$xml = simplexml_load_file($URL);

$fileContents= file_get_contents($URL);
$simpleXml = simplexml_load_string($fileContents);
$json = json_encode($simpleXml);
echo ($json);

// fetching data from local file if fetching firn URL failed
if(!$xml){
    //fetching data from local file //Error handling if loading form URL and local file failed
    $xml = simplexml_load_file($local_file) or die ("Cannot load data from URL and cannot find local file");
    echo "Loading data from url failed. Data loaded from local file<br/>";
    
}


?>

