<?php
include 'simple_html_dom.php';
// Create DOM from URL or file
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['id'])){
    $q=$_GET['id'];
    $url = "https://www.pngaaa.com/detail/".$q."";
    $status = 1;
}else{$q="";$status=0;}
    
$html = file_get_html($url);
$idlist = [];

$title = $html->find('title',0)->innertext;
$size = $html->find('.icon_filesize',0)->innertext;
$filetype = $html->find('.icon_filetype',0)->innertext;

$description = $html->find('meta[name=description]',0)->innertext;



foreach($html->find('.photo-grid-item') as $element){
    array_push($idlist,substr($element->href,8));
}


$detais = [
    'status' => $status,
    'id' => $q,
    'title' => $title,
    'size' => $size,
    'download' => 'https://www.pngaaa.com/api-download/'.$q,
    'middle_size_image' => 'https://image.pngaaa.com/'. substr($q,-3) .'/'.$q.'-middle.png',
    'small_size_image' => 'https://image.pngaaa.com/'. substr($q,-3) .'/'.$q.'-small.png',
    'filetype' => $filetype,
    'related' => $idlist,
    'date' => $html->find('.icon_date',0)->innertext,
    'license' => $html->find('.icon_licence',0)->innertext,
    'dimensions' => $html->find('.icon_dimensions',0)->innertext,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);
    
?>
