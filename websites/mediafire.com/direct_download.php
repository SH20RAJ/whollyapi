<?php
include '../shd.php';


if(isset($_GET['id'])){
    $url = 'https://www.mediafire.com/file/'.$_GET['id'].'/';
    $status = 1;
}else{$url="";$status=0;echo "URL unavailable - try ?url={{your dev.to/sh20raj article url}}";die();}


//$url = "https://dev.to/";
$status = 1;

$html = file_get_html($url);

$directlink = $html->find('#downloadButton',0)->href;

header('location:'.$directlink.'');
?>