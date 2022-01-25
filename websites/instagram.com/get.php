<?php
include '../shd.php';
// Create DOM from URL or file
//header('Content-Type: application/json; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $url = "https://www.tubeoffline.com/downloadFrom.php?host=Instagram&video=https://www.instagram.com/p/".$id."/embed/";
    $status = 1;
}else{$id="";$status=0;echo "id unavailable - try ?id={{your insta post id}}";die();}



$status = 1;

$html = file_get_html($url);
//echo $html;
$link = $html->find('#videoDownload a',0)->href;
$size = null;

$detais = [
    'status' => $status,
    'id' => $id,
    'size' => $size,
    'download' => $link,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);
?>