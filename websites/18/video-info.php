<?php
include '../shd.php';
// Create DOM from URL or file
//header('Content-Type: application/json; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $url = "https://www.xvideos.com/video66826823/dad_couldn_t_resist_when_he_washed_his_daughter";
    $status = 1;
}else{$id="";$status=0;
    
}

$url="https://www.xvideos.com/video66826823/dad_couldn_t_resist_when_he_washed_his_daughter";

//$status = 1;

$html = file_get_html($url);
echo $html;
echo $title = $html->find('title',0)->plaintext;


/*
$size = null;

$detais = [
    'status' => $status,
    'id' => $id,
    'title' => $title,
    'size' => $size,
    'download' => $link,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);*/
?>