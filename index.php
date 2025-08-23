<?php
declare(strict_types=1);

$yamlPath = __DIR__ . '/projects.yaml';

if (!file_exists($yamlPath)) {
    exit("projects.yaml not found.");
}

$projects = null;

// Use PECL yaml if available
if (function_exists('yaml_parse_file')) {
    $projects = yaml_parse_file($yamlPath);
} else {
    require __DIR__ . '/vendor/autoload.php';
    $projects = Symfony\Component\Yaml\Yaml::parseFile($yamlPath);
}

if (!is_array($projects)) {
    $projects = [];
}

function e(?string $v): string {
    return htmlspecialchars((string)$v, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

?>

<head>

    <meta charset="UTF-8">

    <title>Yohwllo</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/IBM-type/0.5.4/css/ibm-type.min.css">
    <style>
      body {
        background-color: #161616;
        font-family: IBM Plex Mono, monospace;
        font-weight: 500;
     height: 10000px;
     overflow-x:hidden;
      }

      .wrapper {
        margin-left:auto;
        margin-right: auto;
        margin-bottom: 0;
        margin-top: 0;
        width: 770px;

        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;

        height: auto;
      }

      /* Header */
      .header {
        z-index: 1;
        width: 650px;
        margin: auto;
        height: 150px;        
      }

      .banner {
        z-index: 1;
        width: 650px;
        margin-top: 25px;
        margin-bottom: 25px;
        height: 100px;
      
        box-shadow: -10px -10px inset white, -10px -10px white;
      }

      .about_me {
        height: 400px;
        width: 300px;
        background-color: #292929;

        box-shadow: 13px 13px #641A80;
        outline-style: solid;
        outline-color: #9305C5;

        display: flex;

        justify-content: space-evenly;
        flex-wrap: wrap;
        
      }

      .projects {
          height: 400px;
          width: 300px;
          background-color: #292929;
          
          box-shadow: 13px 13px #934F14;
          outline-style: solid;
          outline-color: #DE6800;
            
          display: flex; 
            
          flex-direction: column;
      }

      .projects_container {
          display: flex;
          width: 275px;
          height: 310px;          
          margin: auto;

          background-color: #393939;
          outline-color: #DE6800;
          outline-style: solid;
          outline-width: 1px;

          overflow-y: scroll;
          flex-direction: column;
          justify-content: space-between;
          
      }

      .Blog_and_badges {
        width: 300px;
        height: 400px;
        margin-top: 35px;



      }

      .Pictures {
        width: 300px;
        height: 400px;
        margin-top: 35px;

        display: block;

        background-color: #292929;
        outline-style: solid;
        outline-color: #16bdf9;
        box-shadow: 13px 13px #0a7196;
      }


      /* Dashed List */
      ul {
  margin: 0;
}
ul.dashed {
  list-style-type: none;
}
ul.dashed > li {
  text-indent: -2px;
      padding-top: 5;

}
ul.dashed > li:before {
  content: "-";
  text-indent: -2px;
}


      /* Shooting star */
      
.star{
    position: absolute;
    top: 50%;
    left: 50%;
    width: 4px;
    height: 4px;
    background: #fff;
    border-radius: 50%;
    box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.1), 0 0 0 8px rgba(255, 255, 255, 0.1), 0 0 20px rgba(255, 255, 255, 1)  ;
    animation:  animate 3s linear infinite;
     z-index: -1;
}
.star::before{
    content: '';
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 0px;
    height: 1px;
    background: linear-gradient(90deg, #fff, transparent);
}
@keyframes animate {
    0%
    {
        transform: rotate(315deg) translateX(0);
        opacity: 0;
    }
    10%
    {
        opacity: 1;
    }
    70%
    {
        opacity: 1;

    }
    100%
    {
        transform: rotate(315deg) translateX(-1500px);
        opacity: 1;

    }

}

    </style>

</head> 


<body>

  <div class="wrapper">
    
    <div class="header">
      <div class="banner">
        <h2 style="color: white; font-size: 20px; height: 25px; width: 100px; margin-top: 0px; float: left;">souro.ca</h2>
        <h2 style=" color:white; height: 25px; width: 650px; text-align: center; position: absolute;"> Siracha </h2>
        <h2 style="color:white; height: 85px; float: right; font-size: 10px; width: 100px;"> Also called; <br> Yohello <br> Yohwllo <br> Souro <br> Kitty <br> Sourojeet </h2>
        <h2 style=" color: #222; height: 10px; width: 30px; font-size: 10px; padding-top 30px;transform: translateY(20px);"> secret button </h2>
        <h2 style="color: white; display: inline-block; text-align:center; width: 450px; font-size: 12px; height: 15px;padding-top: 40;"> s23adhik@uwaterloo.ca</h2>
      </div> <!-- banner div -->


    </div>

      <div class="about_me">
        <img src="./images/pfp2.webp" style="border-radius: 10%; width: 100px; height: 100px;; padding: 10px; display: block-inline;">
        <img src="./images/pfp3.jpg" style="border-radius: 10%; width: 100px; height: 100px; padding: 10px; display: block-inline;">

        <h2 style="color: #EEE;height: 10px; margin: 0px;"> About me </h2>
        <p style="color: #EEE; padding: 5px;">
          Hello, I'm Sourojeet Adhikari (Siracha/Souro/Kitty depending upon where you know me from). I'm a programmer & physicist at heart! I'm studying Mathematical Physics at the University of Waterloo, and do a lot of CS stuff on the side. This is my website, feel free to look around!
          <br> <br>
          (I hear there's a secret button somewhere here ;)
        </p>

      </div> <!--  about me div -->
    
    <div class="projects">
    <h2 style="outline-style: solid; outline-color: #DE6800; outline-width: 1px; padding: 5px; margin-left: auto; margin-right: auto; height: 25px; color: #EEE; margin-top: 12px; display: flex;"> Projects </h2>
        <div class="projects_container">
<?php if (empty($projects)): ?>
  <p>No projects found.</p>
<?php else: ?>
<?php foreach ($projects as $proj): ?>
  <div style="width:240px; height: 250px; padding: 10px; color: #DDD;">

  <strong style="font-size: 16px;"><?= e($proj['Name'] ?? '') ?></strong><br>
  <p style="margin:1px;"> <?= e($proj['Description'] ?? '') ?></p>
  <a style="color: #40a2ed; margin:1px;" href="<?= e($proj['Link'] ?? '#') ?>">Link</a>
  </div>
<?php endforeach; ?>
<?php endif; ?>
        </div>
    </div> <!-- Projects Div -->

    <div class="Blog_and_Badges">
      <div style="height: 250px; width: 300px; outline-color: #23ea8d; box-shadow: 13px 13px #086c3e; outline-style:solid; background-color: #292929; "> <!-- This div -->
        <h2 style="position: relative; top: 8px;color: #EEE; margin-top: 0px; margin-bottom: 0px; margin-left: auto; margin-right: auto; text-align: center; outline-width: 2px; width: 80px; outline-style: solid; outline-color: #086C3E"> Blog </h2>
        <div style="overflow-y:scroll; margin-top: 20px;">
          <ul class="dashed">
            <?php
             $dir = 'myPosts'; // Path to your directory
             if (is_dir($dir)) {
             $files = scandir($dir); // Get all files in directory
             foreach ($files as $file) {
             if ($file !== '.' && $file !== '..') { // Skip . and ..
             $filePath = $dir . '/' . $file;
             echo '<li><a style="color:white" href="' . $filePath . '">' . htmlspecialchars($file) . '</a></li>';
}
}
} else {
echo '<li>No posts found.</li>';
}
?>
          </ul>
        </div>
      </div>

      <div style="height: 100px; width: 300px; outline-color: #e84d22; outline-style: solid; margin-top: 40px; background-color: #292929; y-overflow:scroll;">
        <h2 style="color:white; font-size: 16; margin-left: auto; margin-right: auto; text-align:center;"> Badges </h2>
        <a style="color:white" href="."><img src="images/badge.png" alt="My Badge!"></a>

                <a style="color:white" href="https://hexadecimaldinosaur.com/"><img src="https://hexadecimaldinosaur.com/static/button.gif" alt="Ivys badge!"></a>
                <a style="color:white" href="https://hyperneutrino.xyz/"><img src="https://hyperneutrino.xyz/badge.png" alt="Iriss badge!"></a>
                    <a style="color:white" href="https://www.zerotiger.ca/
/"><img src="https://www.zerotiger.ca/eighteightthreeone/zerotiger.gif" alt="Tiger's badge!"></a>
                    <a style="color:white" href="https://dundeezhang.com/"><img src="https://dundeezhang.com/badges/dundeezhang.gif" alt="Tiger's badge!"></a>
      </div>


    </div> <!-- Blog div -->

    <div class="Pictures"> <!-- Not pictures lol, this is the links -->
      <h2 style="font-size: 16px; color: #EEE;width: 200px; margin-left: auto; margin-right: auto;display:block; margin-bottom: 0px;"> Links To Cool Sites </h2>
    <br>
    <div style="display:block;">
      <ul class="dashed">
        <li><a style="color:white" href="https://csclub.ca">csclub.ca</a></li>
        <li><a style="color:white" href="https://eater.net/boids">eater.net</a></li>
        <li><a style="color:white" href="https://syed.world/">syde.world</a></li>
        <li><a style="color:white" href="https://cubityfir.st/">cubityfir.st</a></li>
        <li><a style="color:white" href="http://provethatyouarenotarobot.com/">provethatyouarenotarobot</a></li>
        <li><a style="color:white" href="https://dundeezhang.com/">dundeezhang.com</a></li>
        <li><a style="color:white" href="https://smartineau.me/">samrtineau.me</a></li>
        <li><a style="color:white" href="https://cs.uwaterloo.ca/~c2batty/">Christopher Batty (UWaterloo Prof)</a></li>
        <li><a style="color:white" href="https://math.uwaterloo.ca/~lwmarcou/">Marcoux (UWaterloo Prof)></a></li>
        <li><a style="color:white" href="https://laifrank2002.github.io/">Lai Frank</a></li>
        <li><a style="color:white" href="https://github.com/Equilibris">William Sørensen</a></li>
      </ul>
    </div>
    </div> <!-- Pictures div -->

  </div>

<?php
function getFloat($min, $max) {
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}

for($x = 0; $x <= rand(10, 30); $x++) {
    echo "<span class=\"star\" style=\"top: -100px; right: ";
    echo rand(0, 100);
    echo "%; left: initial; animation-delay: " . getFloat(0.1, 3.0) . "s; animation-duration: " . getFloat(2.0, 4.0) . "s;\"></span> ";
}


for($x = 0; $x <= rand(10, 30); $x++) {
    echo "<span class=\"star\" style=\" top: ";
    echo rand(0, 1000);
    echo "px;left: 101%; animation-delay: " . getFloat(0.1, 3.0) . "s; animation-duration: " . getFloat(2.0, 4.0) . "s;\"></span> ";
}
 
 ?>


  
</body>


