<?php
include '../shd.php';
// Create DOM from URL or file
//header('Content-Type: application/json; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['url'])){
    $url = $_GET['url'];
    $status = 1;
}else{$url="";$status=0;echo "URL unavailable - try ?url={{your dev.to article url}}";die();}


//$url = "https://dev.to/";
$status = 1;

$html = file_get_html($url);
echo $html;
$articlebody = $html->find('#article-body',0)->plaintext;
$size = null;

$detais = [
    'status' => $status,
    'url' => $url,
    'articlebody' => $articlebody,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);
?>