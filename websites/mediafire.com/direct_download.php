<?php
if (isset($_GET['id'])) {
    $url = 'https://www.mediafire.com/file/' . $_GET['id'] . '/';
    $status = 1;
} else {
    $url = "";
    $status = 0;
    echo "URL unavailable - try ?url={{your dev.to/sh20raj article url}}";
    die();
}

function fetch_html($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'cURL Error: ' . curl_error($ch);
        curl_close($ch);
        return false;
    }
    curl_close($ch);
    return $response;
}

$html = fetch_html($url);
if (!$html) {
    echo "Failed to fetch the URL content via cURL.";
    die();
}

// Load HTML into DOMDocument
$dom = new DOMDocument();
libxml_use_internal_errors(true);
$dom->loadHTML($html);
libxml_clear_errors();

// Find the download button by its ID
$xpath = new DOMXPath($dom);
$button = $xpath->query("//*[@id='downloadButton']");

if ($button->length > 0) {
    $directlink = $button->item(0)->getAttribute('href');
    header('Location: ' . $directlink);
    exit;
} else {
    echo "Download button not found!";
    die();
}
?>
