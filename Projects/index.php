<head>
  <title>Project</title>
  <link rel="stylesheet" href="../indexx.css">
</head>
<?php

$jsondata = file_get_contents("projects.json");
$json = json_decode($jsondata, true);


$codeLenght = count($json['text']);
$codeLenght *= 200;
$codeLenght += 80;

$imagesLenght = count($json['images']);
$imagesLenght *= 480;
$imagesLenght += 80;

if ($imagesLenght > $codeLenght) {
  $finalSize = $imagesLenght;
} else if ($imagesLenght < $codeLenght) {
  $finalSize = $codeLenght;
} else {
  $finalSize = $codeLenght;
}
?>

<style>
  h1 {
    text-align: center;
    padding-top: 100px;
    opacity: 1;
  }

  h3 {
    opacity: 1;
    text-align: center;
    font-size: 20pt;
    padding-right: 0%;
  }

  p {
    text-align: center;
  }

  .line {
    height: 5px;
    background-color: white;
  }

  .section_title {
    width: 49.8%;
    height: 80px;
  }

  #cgi {
    float: left;
  }

  #code {
    float: right;
  }

  .divider {
    background-color: white;
    width: 0.4%;
    height: <?php echo $finalSize; ?>px;
    float: left;
  }

  .pics {
    height: 480px;
    width: 100%;
    float: left;
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center;
  }

  .dark_box {
    background-color: rgba(.1, .1, .1, .5);
    width: 40%;
    margin: auto;
  }

  .words {
    text-align: center;
    height: 200px;
  }
</style>

<body>
  <h1>Projects</h1>
  <div class="line"></div>

  <div class="section_title" id="cgi">
    <h2>Things with pictures!!!!</h2>
    <div class="pics" style="background-image: url('https://placewaifu.com/image/200');">
      <div class="dark_box">
        <h3> [Project name] </h3>
        <p> [small description] </p>
      </div>
    </div>
  </div>

  <div class="divider">
  </div>

  <div class="section_title" id="code">
    <h2>Things without pictures</h2>
    <div class="words">
      <h3><?php echo $json['names'][0]['First']; ?></h3>
      <p><?php echo $json['names'][0]['Last']; ?></p>
      <p><a href="[link]"><?php echo $finalSize; ?></a></p>
    </div>
  </div>
</body>

<!-- $code = $json['name'][0]['code']; -->