<head>

    <meta charset="UTF-8">

    <title>Yohello</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<?php

$jsondata = file_get_contents("data.json");
$json = json_decode($jsondata, true);

$name = "Yohello";
$time = "not avaliable during this time";
$jobs = "no jobs";
$code = $json['for_show'][0]['code'];
$cgi = $json['for_show'][0]['cgi'];


$project1 = "Projects/tower.php";
$project2 = "Need to make";

$images_used = array("None", "None", "None");

function anime()
{
    $width = rand(240, 2160);
    $heightPartlow = $width / 3;
    $heightParthigh = $heightPartlow + 500;
    $height = rand($heightPartlow, $heightParthigh);
    echo 'https://placewaifu.com/image/' . $width . '/' . $height;
}



function pic_fetch()
{
    $json_data_projects = file_get_contents("Projects/projects.json");
    $json_projects = json_decode($json_data_projects, true);
    // $amount_of_projects = count($json_projects['images']);

    // for ($x = 0; $x < $amount_of_projects; $x++) {
    //     // rand(0,$amount_of_projects);
    // }
    echo $json_projects['images'][1]['image'];
}

?>




<body>
    <style>
        @font-face {
            font-family: FiraCode;
            src: url(FiraCode-VariableFont_wght.ttf)
        }

        @media only screen and (max-width: 1200px) {
            .introtext {
                float: left;
                width: 100%;
            }

            .cgivfxtext {
                float: right;
                width: 100%;
            }

            img {
                float: left;
                width: 100%;
                height: auto;
                object-fit: cover;
                z-index: 1;
                position: relative;
            }

            .rectangle2 {
                float: left;
                position: relative;
                top: -10px;
                height: 5px;
                width: 100px;
                background-color: tomato;
                z-index: -1;

            }

            .rectangle3 {
                float: left;
                position: relative;
                top: -10px;
                height: 5px;
                width: 100px;
                background-color: rgb(235, 144, 59);
            }

            .Contactinfo {
                float: right;
                width: 50%;
            }

            .container2 {
                position: relative;
                height: 700px;
                width: 100%;
                float: left;
                left: 0;
                right: 0;
            }

            .container3 {
                top: 50px;
                position: relative;
                height: 380px;
                width: 100%;
                float: right;
                right: 0%;
            }

            .container4 {
                position: relative;
                top: 40px;
                height: 380px;
                width: 100%;
                float: right;
                right: 0%;
            }

            p {
                font-family: FiraCode;
                color: whitesmoke;
                line-height: 40px;
                font-size: 25pt;
            }

            .anime_waifu {
                object-fit: fill;
            }



        }

        @media only screen and (min-width: 1201px) {
            p {
                font-family: FiraCode;
                color: whitesmoke;
                line-height: 30px;
                font-size: 15pt;
            }





            .container4 {
                position: relative;
                top: 40px;
                height: 380px;
                width: 50%;
                float: right;
                right: 5%;
            }

            .cgivfxtext {
                float: right;
                width: 40%;
            }

            .container3 {
                top: 0px;

                position: relative;
                height: 380px;
                width: 50%;
                float: right;
                right: 5%;
            }

            .Contactinfo {
                float: left;
                width: 40%;
            }

            .rectangle3 {
                float: right;
                position: relative;
                top: -10px;
                height: 5px;
                width: 100px;
                background-color: rgb(235, 144, 59);
            }



            .rectangle2 {
                float: right;
                position: relative;
                top: -10px;
                height: 5px;
                width: 100px;
                background-color: tomato;
            }

            .introtext {
                float: left;
                width: 40%;
                padding-right: 10%;
            }

            img {
                float: left;
                width: 50%;
                height: auto;
                object-fit: cover;
                z-index: 10;
                position: relative;


            }

            .left-button {
                width: 25%;
                float: left;
                position: relative;
                left: 9%;
            }

            .text-block2 {
                position: absolute;
                bottom: 85%;
                left: 20%;
                background-color: rgba(0, 0, 0, 0.24);
                color: white;
                padding-left: 20px;
                padding-right: 20px;
                font-family: Firacode;
            }

            .text-block {
                position: absolute;
                bottom: 70%;
                left: 20%;
                background-color: rgba(0, 0, 0, 0.24);
                color: white;
                padding-left: 20px;
                padding-right: 20px;
                font-family: Firacode;
            }

            .container2 {
                position: relative;
                height: 800px;
                width: 33%;
                float: left;
                left: 9%;
                right: -10%;
            }

        }

        .start {
            padding-bottom: 50px;
            padding-top: 50px;
            background-image: url("images/oldpfp.png");
            background-size: cover;
            background-position: 10%;
        }

        .left-col,
        .right-col {
            text-align: center;
            width: 33.33%;
            float: left;
        }

        .center-col {
            text-align: center;
            width: 33.33%;
            float: left;

        }

        body {
            background-color: #333333;
        }

        a {
            color: #ebebeb;
            font-family: Firacode;
        }


        h1 {
            font-family: FiraCode;
            color: #EEEEEE;
            text-align: left;
            font-size: 60pt;
            font-family: Firacode;
        }

        h2 {
            font-family: FiraCode;
            color: #ebebeb;
            text-align: center;
            font-size: 20pt;
            font-family: Firacode;
        }

        p {
            text-align: left;
            font-family: Firacode;
        }

        .left-button {
            width: 25%;
            float: left;
            position: relative;
            left: 9%;
        }

        .text-block2 {
            position: absolute;
            bottom: 85%;
            left: 20%;
            background-color: rgba(0, 0, 0, 0.24);
            color: white;
            padding-left: 20px;
            padding-right: 20px;
            font-family: Firacode;
        }

        .text-block {
            position: absolute;
            bottom: 70%;
            left: 20%;
            background-color: rgba(0, 0, 0, 0.24);
            color: white;
            padding-left: 20px;
            padding-right: 20px;
            font-family: Firacode;
        }

        h4 {
            color: #111111;
            text-align: center;
            font-family: Firacode;
        }

        .h31 {
            font-family: FiraCode;
            color: #ebebeb;
            text-align: left;
            padding-left: 5%;
            font-size: 18pt;
            font-family: Firacode;
        }

        .rectangle {
            position: relative;
            top: -10px;
            height: 5px;
            width: 100px;
            background-color: tomato;
        }

        .nextpoint {
            float: left;
            width: 100%;
            height: 200px;
        }


        h3 {
            font-family: FiraCode;
            color: #ebebeb;
            text-align: right;
            padding-right: 5%;
            font-size: 18pt;
            font-family: Firacode;
        }

        h3 {
            font-family: FiraCode;
            color: #ebebeb;
            text-align: left;
            padding-right: 5%;
            font-size: 18pt;
            font-family: Firacode;
        }

        .rectangle {
            position: relative;
            top: -10px;
            height: 5px;
            width: 100px;
            background-color: tomato;
            z-index: -1;

        }

        .flex_box {
            display: flex;
            flex-flow: column wrap;
            justify-content: space-evenly;
            align-items: flex-start;
            align-content: flex-start
        }

        .flex_boxxy {
            background: tomato;
            padding: 5px;
            width: 200px;
            height: 150px;
            margin-top: 10px;
            line-height: 150px;
            color: white;
            font-weight: bold;
            font-size: 3em;
            text-align: center;
        }
    </style>

    <div class="start">
        <h1>Yohello</h1>
    </div>
    <div class="row">

        <div class="left-col">
            <h2><a href="Projects/"><u>Projects</u></a></h2>

        </div>

        <div class="center-col">

            <h2><a href="fullintroduction.html">About me</a></h2>

        </div>

        <div class="right-col">

            <h2><a href="contact.php">Contact Me</a></h2>
        </div>

    </div>

    <!-- Duck this poop let's start -oop -->


    <ul class="flex_box">
  <li class="flex_boxxy">1</li>
  <li class="flex_boxxy">2</li>
  <li class="flex_boxxy">3</li>
  <li class="flex_boxxy">4</li>
  <li class="flex_boxxy">5</li>
  <li class="flex_boxxy">6</li>
</ul>




    <!-- Part 2 -->
    <div class="nextpoint"> </div>
    <div class="introtext">
        <h3 class="h31">About Me</h3>
        <div class="rectangle"></div>

        <?php
        // Add some proper info here later
        echo 'uhhh what';
        ?>
    </div>
    <br>

    <div class="Contactinfo">
        <h3>Contact Information</h3>
        <div class="rectangle4"></div>
        <p>Insert Contact information.
            <br> <br>I will not work for you.<br> This will doubtfully change
        </p>
    </div>
    <div class="nextpoint"></div>

    <div class="cgivfxtext">
        <h3>Cgi and Vfx</h3>
        <div class="rectangle2"></div>
        <p>I'm always working on some sort of cgi/vfx, this is my latest project involving fire,hardsurface,rigidbody, and so much more. <br> <a href="Projects/Visualfx.html"> To learn more about this project</a> <br> <a href="Projects/index.php">Projects in general</a>
        </p>

    </div>

    <div class="imgvfx">
        <img src="<?php echo $cgi; ?>">
    </div>



    <div class="nextpoint">

    </div>
    <br>
    <div class="cgivfxtext">
        <h3>Coding</h3>
        <div class="rectangle3"></div>
        <p>I'm not always coding, but when I do I do quite a lot of coding. As in I'll make an entire website, app, or game<br> I've used Godot, Unreal, and Unity to Develop games. I use python when doing stuff with api's, and I use C/C++ when doing standalone
            programs and such usally I'm using C. <br> <a href="https://github.com/Yohello1"> Github, Fraction of what I've done is saved here</a> <br> <a href="Projects/Coding.html">Coding Page</a> <br> <a href="Projects/Projecthomepage.html">All Projects</a>
        </p>
    </div>
    <div class="imgvfx">
        <img src="<?php echo $code ?>">
    </div>
    <div class="nextpoint">

    </div>
    <br>

    <div class="nextpoint"></div>
    <br>
    <br>
    <br>

</body>