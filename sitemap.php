<?php



function extractURLs($pageURL) {
        $pageContent = file_get_contents($pageURL);

        $dom = new DOMDocument;
        libxml_use_internal_errors(true);
        $dom->loadHTML($pageContent);
        libxml_clear_errors();

        $urls = array();
        $links = $dom->getElementsByTagName('a');

        foreach ($links as $link) {
            $url = $link->getAttribute('href');
            if ($url && $url !== '#') {
                $urls[] = $pageURL . $url;
            }
        }

        return $urls;
    }
function isLink($string) {
    $pattern = '/^(https?:\/\/)?([\w\d\-]+\.)+[\w\d\-]+(\/[\w\d\-./?=#%&]*)?$/i';
    return preg_match($pattern, $string);
}

if(!isset($_GET['url'])){
  echo "Add your Website URL to the url parameter.";
  echo "For Example :- https://wholly-api.sh20raj.repl.co/sitemap.php?url=https://github.com/";
  echo "Get more on <a href='../'>Wholly-API</a>";
} else {
  header("Content-Type: application/xml; charset=utf-8");
  // Example: Extract URLs from the homepage
    $pageURL = $_GET['url'];
  if (substr($pageURL, -1) === '/') {
    $pageURL = rtrim($pageURL, '/');
    }
    $urls = extractURLs($pageURL);
    echo '<?xml version="1.0" encoding="UTF-8"?>';
    echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
  

    foreach ($urls as $url) {
      //if(!var_dump(isLink($url))){continue ; }
        echo '<url>';
        echo '<loc>' . htmlspecialchars($url) . '</loc>';
        echo '<lastmod>' . date("Y-m-d") . '</lastmod>';
        echo '<changefreq>daily</changefreq>';
        echo '<priority>1.0</priority>';
        echo '</url>';
    }
  echo '</urlset>';
}
        
    ?>

