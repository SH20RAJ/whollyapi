<?php
include '../shd.php';
// Create DOM from URL or file
//header('Content-Type: application/json; charset=utf-8');
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $url = "https://imginn.org/".$id."/";
    $status = 1;
}else{$id="";$status=0;echo "id unavailable - try ?id={{your insta post id}}";die();}



$status = 1;

$html = file_get_html($url);

$user = $html->find('.avatar img',0)->alt;
$userimage = $html->find('.avatar img',0)->src;

$nickname = $html->find('.nickname',0)->plaintext;
$description = $html->find('.desc',0)->plaintext;

$postids = [];
foreach($html->find('.post-items a') as $element){
   array_push($postids,substr(substr($element->href,3),0,-1));
}


$dataId = 'data-id';
$dataId = $html->find('.user-wrapper',0)->$dataId; 
$stories = 'https://imginn.org/api/reels/?id='.$dataId;
if(isset($_GET['stories'])){
    $stories = file_get_contents($stories);
}



$detais = [
    'status' => $status,
    'id' => $id,
    'user' => $user,
    'userimage' => $userimage,
    'postids' => $postids,
    'stories' => $stories,
    'nickname' => $nickname,
    'description' => '',
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);

file_get_contents('https://bit.ly/whollyapi-website-instagramcom');
?>