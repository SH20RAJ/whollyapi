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

// Fetch the HTML content of the page
$html = file_get_contents($url);
if (!$html) {
    echo "Failed to fetch the URL content.";
    die();
}

// Load HTML into DOMDocument
$dom = new DOMDocument();
libxml_use_internal_errors(true); // Suppress warnings for invalid HTML
$dom->loadHTML($html);
libxml_clear_errors();

// Find the download button by its ID
$xpath = new DOMXPath($dom);
$button = $xpath->query("//*[@id='downloadButton']");

if ($button->length > 0) {
    // Extract the href attribute
    $directlink = $button->item(0)->getAttribute('href');
    header('Location: ' . $directlink);
    exit;
} else {
    echo "Download button not found!";
    die();
}
?>
