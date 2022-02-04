<?php
include '../assets/simplehtmldom.php';

header('Access-Control-Allow-Origin: *');
if(isset($_GET['get_html'])){
       header('Content-Type: application/json; charset=utf-8');
       echo file_get_html($_GET['get_html']);
       die();
}
header('Content-Type: application/json; charset=utf-8');

// Create DOM from URL or file
if(isset($_GET['url'])){$url = $_GET['url'];}else{$url = "https://www.youtube.com/channel/UCFPFrVOaeG3q1PEzpeh7hCg";}

$html = file_get_html($url);


echo $title = $html->find('title',0)->plaintext;
print_r($title = $html->find('meta[property="og:image"]',0)) ;
print_r('ff'); 



foreach($html->find('meta') as $element)
       echo $element->src . '<br>';


/*
// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
*/

file_get_contents('https://bit.ly/whollyapi-gethtmldata');

?>
