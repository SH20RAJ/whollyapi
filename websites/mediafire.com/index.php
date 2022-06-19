<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Mediafire Direct Download Link</title>
</head>
<body>
<div class="container">

<header>
  <h2><a href="#"><i class="ion-plane"></i> WhollyAPI</a></h2>
  <nav>
    <ul>
      <li>
        <a href="../" title="Home">Home</a>
      </li>
      <li>
        <a href="../contact" title="Contact">Contact</a>
      </li>
      <li>
        <a href="../tools" title="Tools">Tools</a>
      </li>
      <li>
        <a class="btn" href="https://youtube.com/playlist?list=PLFcP4G5x1z-oowof1pPA-gTmt0LuyXWf7" title="YouTube">YouTube</a>
      </li>
    </ul>
  </nav>
</header>

<div class="cover">
  <h1>Generate Mediafire Diretct Link</h1>
  <form  class="flex-form">
    <label for="from">
      <i class="ion-location"></i>
    </label>
    <input type="search" placeholder="Enter Mediafire file URL" id="url">
    <input type="button" value="Get" onclick="grab()" onchange="grab()">
  </form>
  <div id="generatedlink"></div>
  <div id="madeby">
    <span>
      Try - https://wholly-api.herokuapp.com/websites/mediafire.com/direct_download.php?id=<b>YOUR_FILE_ID</b>
    </span>
  </div>
</div>

</div>
<script>
    
function grab() {
 let i = 'https://wholly-api.herokuapp.com/websites/mediafire.com/direct_download.php?id='+document.getElementById('url').value.split("/")[4]+'';
document.getElementById('url').value = i;
}
</script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lato:400,700');

*, *:before, *:after {
  -webkit-box-sizing: inherit;
  -moz-box-sizing: inherit;
  box-sizing: inherit;
}

::-webkit-input-placeholder {
  color: #56585b;
}

::-moz-placeholder {
  color: #56585b;
}

:-moz-placeholder {
  color: #56585b;
}

html {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Lato', sans-serif;
  margin: 0;
  background: url('https://source.unsplash.com/G8rRItjrwkA') no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  background-size: cover;
  color: #0a0a0b;
  overflow: hidden;
}

ul, nav{
  list-style: none;
  padding: 0;
}

a {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
  opacity: 0.9;
}

a:hover {
  opacity: 1;
}

h1 {
  font-size: 3rem;
  font-weight: 700;
  color: #fff;
  margin: 0 0 1.5rem;
}

i {
  font-size: 1.3rem;
}

header {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 10;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  padding: 10px 100px 0;
}

header nav ul {
  display: flex;
}

header nav li{
  margin: 0 15px;
}

header nav li:first-child{
  margin-left: 0; 
}

header nav li:last-child{
  margin-right: 0;  
}

a.btn {
  color: #fff;
  padding: 10px;
  border: 1px solid rgba(255,255,255,0.5);
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

a.btn:hover {
  background: #d73851;
  border: 1px solid #d73851;
  color: #fff;
}

.cover  {
  height: 100vh;
  width: 100%;
  background: -webkit-gradient(linear, left top, left bottom, from(rgba(0,0,0,0.05)), to(rgba(0,0,0,0)));
  background: -webkit-linear-gradient(top, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
  background: linear-gradient(to bottom, rgba(0,0,0,0.05) 0%, rgba(0,0,0,0) 100%);
  padding: 20px 50px;
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  flex-direction: column;
  -webkit-box-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  align-items: center;
}

.flex-form input[type="button"] {
  background: #ef3f5a;
  border: 1px solid #ef3f5a;
  color: #fff;
  padding: 0 30px;
  cursor: pointer;
  -webkit-transition: all 0.2s;
  -moz-transition: all 0.2s;
  transition: all 0.2s;
}

.flex-form input[type="button"]:hover {
  background: #d73851;
  border: 1px solid #d73851;
}

.flex-form {
  display: -webkit-box;
  display: flex;
  z-index: 10;
  position: relative;
  width: 500px;
  box-shadow: 4px 8px 16px rgba(0, 0, 0, 0.3);
}

.flex-form > * {
  border: 0;
  padding: 0 0 0 10px;
  background: #fff;
  line-height: 50px;
  font-size: 1rem;
  border-radius: 0;
  outline: 0;
  -webkit-appearance: none;
}

input[type="search"] {
  flex-basis: 500px;
}

#madeby {
  position: absolute;
  bottom: 0;
  right: 0;
  padding: 25px 100px;
  color: #fff;
}

@media all and (max-width:800px) {
  body {
    font-size: 0.9rem;
  }

  .flex-form {
    width: 100%;
  }

  input[type="search"] {
    flex-basis: 100%;
  }

  .flex-form > * {
    font-size: 0.9rem;
  }

  header {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
    padding: 10px !important;
  }

  header h2 {
    margin-bottom: 15px;
  }

  h1 {
    font-size: 2rem;
  }

  .cover {
    padding: 20px;
  }

  #madeby {
    padding: 30px 20px;
  }
}

@media all and (max-width:360px) {
  header nav li{
    margin: 0 10px;
  }

  .flex-form {
    display: -webkit-box;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    flex-direction: column;
  }

  input[type="search"] {
    flex-basis: 0;
  }

  label {
    display: none;
  }
}
</style>
<img src='https://iplogger.org/whollyapi-mediafire'>
</body>
</html>
