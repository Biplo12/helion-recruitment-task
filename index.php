<?php 
header('Content-type: text/plain; charset=utf-8');
header('Access-Control-Allow-Origin: *');
//variables
$URL = "https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml";
$local_file = "./products.xml";

//fetching data from URL
$fileContents= file_get_contents($URL);
//converting form xml to string
$lista = new SimpleXMLElement($fileContents);
foreach ($lista->lista->ksiazka as $book) {
    //storing nessesary variables in array
    $data = array("ident" => $book->ident, "tytul" => $book->tytul[0], "pages" => $book->liczbastron, "date" => $book->datawydania);
    //converting array to JSON file
    $json = json_encode($data, JSON_PRETTY_PRINT);
    //displaying JSON
    echo $json;
 }
?>