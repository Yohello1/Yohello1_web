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
$imagesLenght += 560;

if ($imagesLenght > $codeLenght)
 {
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
    padding-top: 50px;
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
    display:inline-block;

  }

  #code {
    float: right;
    display:inline-block;
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
<?php
  $menu = fopen("../menu.html", "r") or die("Can't open da file menu file");
  echo fread($menu, filesize("../menu.html"));
  fclose($menu);
  ?>
  <h1>Projects</h1>
  <div class="section_title" id="cgi">
    <h2>Things with pictures!!!!</h2>
    <?php
    for ($i = 0; $i < count($json['text']); $i++) {
      echo '<div class="pics" style="background-image: url(\'' . $json['images'][$i]['image'] . '\');">';
      echo '<div class="dark_box">';
      echo  '<h3>' .  $json['images'][$i]['Project_name'] . '</h3>';
      echo  '<p> ' .  $json['images'][$i]['Project_description'] . '</p>';
      echo '</div>';
      echo '</div>';
    }
    ?>
  </div>
  <div class="divider">
  </div>
  <div class="section_title" id="code">
    <h2>Things without pictures</h2>
    <?php for ($i = 0; $i < count($json['text']); $i++) {
      echo  '<div class="words">';
      echo   '<h3>' . $json['text'][$i]['Project_name'] . '</h3>';
      echo   '<p>' . $json['text'][$i]['Project_description'] . '</p>';
      echo   '<p><a href="' . $json['text'][$i]['link'] . '">Link to the project</a></p>';
      echo   '</div>';
    }
    ?>
  </div>
</body>

<!-- $code = $json['name'][0]['code']; -->