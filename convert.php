<?php
// recebendo a url da imagem
$filename = $_FILES['icon-original']['tmp_name'];



// ************* ANDROID/BROWSER FAVICON
// ************* favicon-196x196
list($width, $height) = getimagesize($filename);
$new_width = 196;
$new_height = 196;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "favicon-196x196.png";
imagepng($image_p, $destino);


// ************* favicon-160x160
list($width, $height) = getimagesize($filename);
$new_width = 160;
$new_height = 160;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "favicon-160x160.png";
imagepng($image_p, $destino);

// ************* favicon-96x96
list($width, $height) = getimagesize($filename);
$new_width = 96;
$new_height = 96;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "favicon-96x96.png";
imagepng($image_p, $destino);

// ************* favicon-32x32
list($width, $height) = getimagesize($filename);
$new_width = 32;
$new_height = 32;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "favicon-32x32.png";
imagepng($image_p, $destino);

// ************* favicon-16x16
list($width, $height) = getimagesize($filename);
$new_width = 16;
$new_height = 16;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "favicon-16x16.png";
imagepng($image_p, $destino);




// ************* iOS APPLE TOUCH ICON
// ************* apple-touch-icon-152x152
list($width, $height) = getimagesize($filename);
$new_width = 152;
$new_height = 152;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-152x152.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-144x144
list($width, $height) = getimagesize($filename);
$new_width = 144;
$new_height = 144;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-144x144.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-120x120
list($width, $height) = getimagesize($filename);
$new_width = 120;
$new_height = 120;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-120x120.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-114x114
list($width, $height) = getimagesize($filename);
$new_width = 114;
$new_height = 114;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-114x114.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-76x76
list($width, $height) = getimagesize($filename);
$new_width = 76;
$new_height = 76;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-76x76.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-72x72
list($width, $height) = getimagesize($filename);
$new_width = 72;
$new_height = 72;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-72x72.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-60x60
list($width, $height) = getimagesize($filename);
$new_width = 60;
$new_height = 60;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-60x60.png";
imagepng($image_p, $destino);

// ************* apple-touch-icon-57x57
list($width, $height) = getimagesize($filename);
$new_width = 57;
$new_height = 57;
$image_p = imagecreatetruecolor($new_width, $new_height);
imagealphablending($image_p, false);
imagesavealpha($image_p, true); 
$image = imagecreatefrompng($filename);
imagealphablending($image, true);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
$destino = 'img/' . "apple-touch-icon-57x57.png";
imagepng($image_p, $destino);



echo '
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <!-- Viewport for mobile devices -->
    <meta name="viewport" content="width=device-width, maximum-scale=1.0" />


    <!-- Website description and Keywords -->
    <META NAME="description" CONTENT="Description Here" />
    <META NAME="keywords" CONTENT="keywords, here" />

    <!-- Color for Android Chorme Header Material Design -->
    <meta name="theme-color" content="#e7e7e7">


    <!-- Facebook OpenGraph -->
    <meta property="og:title" content="Website Content Here" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Website Description Here" />
    <meta property="og:site_name" content="http://www.websitedomain.com" />
    <meta property="og:image" content="http://www.websitedomain.com/image.jpg" />


    <title>Icon Generator</title>

    <!-- CSS Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Icons (for favicon and mobile links -->
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">

    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">


</head>

<body>
    <div class="container">
            <div class="col-md-12 text-center ios">
              <h1>apple-touch-icon</h1>
              <hr>
              	<div class="row">
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-152x152.png" width="152" height="152"><p>apple-touch-icon-152x152</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-144x144.png" width="144" height="144"><p>apple-touch-icon-144x144</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-120x120.png" width="120" height="120"><p>apple-touch-icon-120x120</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-114x114.png" width="114" height="114"><p>apple-touch-icon-114x114</p></div>
                </div>
                <div class="row">
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-76x76.png" width="76" height="76"><p>apple-touch-icon-76x76</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-72x72.png" width="72" height="72"><p>apple-touch-icon-72x72</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-60x60.png" width="60" height="60"><p>apple-touch-icon-60x60</p></div>
                    <div class="col-md-3 borda apple-icon"><img src="img/apple-touch-icon-57x57.png" width="57" height="57"><p>apple-touch-icon-57x57</p></div>
                </div>
			</div>
            
            <div class="col-md-12 text-center android">
              <h1>favicon</h1>
              <hr>
              <div class="row">
                <div class="col-md-3 borda android-icon"><img src="img/favicon-196x196.png" width="196" height="196"><p>favicon-196x196</p></div>
                <div class="col-md-3 borda android-icon"><img src="img/favicon-160x160.png" width="160" height="160"><p>favicon-160x160</p></div>
                <div class="col-md-2 borda android-icon"><img src="img/favicon-96x96.png" width="96" height="96"><p>favicon-96x96</p></div>
                <div class="col-md-2 borda android-icon"><img src="img/favicon-32x32.png" width="32" height="32"><p>favicon-32x32</p></div>
                <div class="col-md-2 borda android-icon"><img src="img/favicon-16x16.png" width="16" height="16"><p>favicon-16x16</p></div>
              </div>
                
			</div>
            
            
            <div class="col-md-12">
                <h1 class="text-center">&lt;code/&gt;</h1>
                <hr>
                <div class="well">
                    <code>
                        &lt;!-- Icons --&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;152x152&quot; href=&quot;apple-touch-icon-152x152.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;144x144&quot; href=&quot;apple-touch-icon-144x144.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;120x120&quot; href=&quot;apple-touch-icon-120x120.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;114x114&quot; href=&quot;apple-touch-icon-114x114.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;76x76&quot; href=&quot;apple-touch-icon-76x76.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;72x72&quot; href=&quot;apple-touch-icon-72x72.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;60x60&quot; href=&quot;apple-touch-icon-60x60.png&quot;&gt;<br>
                        &lt;link rel=&quot;apple-touch-icon&quot; sizes=&quot;57x57&quot; href=&quot;apple-touch-icon-57x57.png&quot;&gt;<br>
                        <br>
                        &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;favicon-196x196.png&quot; sizes=&quot;196x196&quot;&gt;<br>
                        &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;favicon-160x160.png&quot; sizes=&quot;160x160&quot;&gt;<br>
                        &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;favicon-96x96.png&quot; sizes=&quot;96x96&quot;&gt;<br>
                        &lt;link rel=&quot;icon&quot; type=&quot;image/png&quot; href=&quot;favicon-32x32.png&quot; sizes=&quot;32x32&quot;&gt;
                    </code>
                </div>
            </div>
            
            
            <div class="col-md-12 text-center">
                <h1>Download</h1>
                <hr>
                <h1><a href="#"><i class="fa fa-download"></i></a></h1>
                <p>Download .zip file</p>
            </div>
            
            <div class="col-md-12 text-center">
            	<hr>
                <p>Icon Generator - by <a href="http://www.celsomartins.com.br" target="new">CELSOMARTINS.COM</a><br />
                <a href="https://github.com/celsomrtns/icon-generator" target="new"><i class="fa fa-github"></i> Github Project</a></p>
                <hr>
            </div>
            
    </div>
</body>

</html>
';

?>