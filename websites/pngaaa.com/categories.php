<?php
include 'simple_html_dom.php';
// Create DOM from URL or file
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
$url = 'https://www.pngaaa.com/';
$html = file_get_html($url);
$status = 1;



$idlist = [];
        //echo $feeds = $html->find('#main',0)->innertext;

foreach($html->find('.popular a') as $element){
    array_push($idlist,$element->title);
}

$detais = [
    'status' => $status,
    'data' => $idlist,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);
    


?>
