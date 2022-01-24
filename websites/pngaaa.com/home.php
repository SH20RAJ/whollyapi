<?php
include '../simple_html_dom.php';
// Create DOM from URL or file
if(isset($_GET['url'])){$url = $_GET['url'];}else{$url = "https://www.pngaaa.com/#";}

$html = file_get_html($url);


echo $title = $html->find('title',0)->plaintext;
print_r($title = $html->find('meta[property="og:image"]',0)) ;

//echo $feeds = $html->find('#main',0)->innertext;

foreach($html->find('#main a') as $element){
    echo substr($element->href,8) . '<br>';
    echo file_put_contents("id/".substr($element->href,8).".js","var id=".substr($element->href,8)); 

}
      
/*
// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';
*/

?>