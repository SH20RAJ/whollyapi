<?php
include 'simple_html_dom.php';
// Create DOM from URL or file
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');

if(isset($_GET['page'])){$page = $_GET['page'];}else{$page = 1;}
        
    
if(isset($_GET['q'])){
    $q=$_GET['q'];
    $url = "https://www.pngaaa.com/search/".$q."/".$page."/";
    $status = 1;
}else{$q="";$status=0;}
    
$html = file_get_html($url);




$idlist = [];
$suggetions = [];
        //echo $feeds = $html->find('#main',0)->innertext;
    
foreach($html->find('.photo-grid-item') as $element){
    array_push($idlist,substr($element->href,8));
}
foreach($html->find('.breadcrumbItem') as $element){
    array_push($suggetions,$element->title);
}
$detais = [
    'status' => $status,
    'query' => $q,
    'page' => $page,
    'data' => $idlist,
    'suggetions' => $suggetions,
];
$detais = json_encode($detais,JSON_PRETTY_PRINT);
print_r($detais);
    
    

/*
for ($x = 0; $x <= 80; $x++) {

    //if(isset($_GET['page'])){$page = $_GET['page'];}else{$page = 1;}
    $page = $x;

    if(isset($_GET['q'])){
        $q=$_GET['q'];
        $url = "https://www.pngaaa.com/search/".$q."/".$page."/";
    }else$q="";

    $html = file_get_html($url);

    $idlist = [];
    //echo $feeds = $html->find('#main',0)->innertext;


    echo "The number is: $x <br>";

    foreach($html->find('.photo-grid-item') as $element){
    array_push($idlist,substr($element->href,8));
    echo substr($element->href,8) . '<br>';
    }
    file_put_contents("search/".$q.".".$page.".json",json_encode($idlist)); 

  }


// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
       
echo $title = $html->find('title',0)->plaintext;
print_r($title = $html->find('meta[property="og:image"]',0)) ;
*/

?>
