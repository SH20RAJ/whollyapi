<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wholly API - Get Free APIs of Many Website - Public or Scrapped - Use even from JavaScript</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="logo.png" type="image/x-icon">

<meta name="description" content="Wholly API - Get Free APIs of Many Website - Public or Scrapped - Use even from JavaScript">

</head>
<body class="container">
  <br><hr><br>
  <header>
    <h1>Wholly API - Get Free APIs of Many Website - Public or Scrapped - Use even from JavaScript</h1>
  </header>
  <br><hr><br>
  <script src="https://cdn.jsdelivr.net/npm/showdown/dist/showdown.min.js"></script>
<div class="container" id="mypost"></div>
<script>
fetch('README.md').then(response => response.text())
  .then(data => {
  console.log(data);
  var converter = new showdown.Converter();
var md = data;
var html = converter.makeHtml(md);
  document.querySelector('#mypost').innerHTML = html;
});
</script>
  
  <br><hr><br>
  
  <h2>See Some APIs From - <a href="https://github.com/public-apis/public-apis">Public APIs.</a></h2>


  
  <footer>
    
  </footer>

</body>
</html>
