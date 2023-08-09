<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

if (isset($_GET['q'])) {
    $query = urlencode($_GET['q']);
    $url = "https://www.rapidtags.io/api/generator?query={$query}&type=YouTube";
    
    $content = file_get_contents($url);
    
    if ($content !== false) {
        echo $content;
    } else {
        $response = array('error' => 'Failed to fetch data.');
        echo json_encode($response);
    }
} else {
    $response = array('error' => 'Missing query parameter.');
    echo json_encode($response);
}
?>
