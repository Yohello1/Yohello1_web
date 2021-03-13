<head>
    <title> Projects Homepage</title>
    <link rel="stylesheet" href="indexx.css">

<head>
<?php
$jsondata = file_get_contents("../data.json");
$json = json_decode($jsondata,true);


$code1title = $json['code'][0]['name'];
$code1lang = $json['code'][0]['lang'];
$code1git = $json['code'][0]['github'];

$code2title = $json['code'][1]['name'];
$code2lang  = $json['code'][1]['lang'];
$code2git   = $json['code'][1]['github'];

$code3title = $json['code'][2]['name'];
$code3lang  = $json['code'][2]['lang'];
$code3git   = $json['code'][2]['github'];
?>



<body>
    <h1>Projects</h1>

        <div class="code-pro"><h2>Code</h2> </div>
        <div class="cgi-pro"> <h2>Cgi/Vfx</h2> </div>




    <div>
    <div class="break">
    <div class="cg-block">
         <a href="tower.php">
<img src="../Images/final.png">
        </a>
    </div>
    <div class="code-block">
        <h3><?php echo $code1title ?></h3>
        <h4>I used; <?php echo $code1lang ?> </h4>
        <h4>The github repo <?php echo '<a href="',$code1git,'"> Test </a>'; ?>

    </div>
    <div class="cg-block">
         <a href="x-mas.php">
           
        </a>
    </div>
    <div class="code-block1">
        <h3><?php echo $code2title ?></h3>
        <h4>I used; <?php echo $code2lang ?> </h4>
         <h4>The github repo <?php echo '<a href="',$code2git,'"> Test </a>'; ?>
    </div>
    <div class="cg-block">
         <a href="tower.php">
           
        </a>
    </div>
    <div class="code-block">
        <h3><?php echo $code3title ?></h3>
        <h4>I used; <?php echo $code3lang ?> </h4>
        <h4>The github repo <?php echo '<a href="',$code3git,'"> Test </a>'; ?>
    </div>
</body>
