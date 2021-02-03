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
            }

            .rectangle2 {
                float: left;
                position: relative;
                top: -10px;
                height: 5px;
                width: 100px;
                background-color: tomato;
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
                float: left;
                width: 100%;
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

p{
font-family:FiraCode;
color:whitesmoke;
line-height:40px;
font-size:25pt;
}



        }

	@media only screen and (min-width: 1201px) {
p{
font-family:FiraCode;
color:whitesmoke;
line-height:30px;
font-size:15pt;
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
                padding-right:10%;
            }

            img {
                float: left;
                width: 50%;
                height: auto;
                object-fit: cover;

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
            padding-bottom: 10px;
            padding-top: 10px;
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

            <h2><a href="contact.html">Contact Me</a></h2>
        </div>

    </div>

    <br>
    <br>
    <br>
    <div class="container2">
        <a href="<?php echo $project1 ?>">
            <img src="<?php echo $json['front_page'][0]['img']; ?>" style="width:100%; height:100%">
            <div class="text-block">
                <h4><?php echo $json['front_page'][0]['caption']; ?></h4>
                <p><?php echo $json['front_page'][0]['sub']; ?></p>
            </div>
        </a>
    </div>
    <div class="container3">
        <img src="<?php echo $json['front_page'][1]['img']; ?>" style="width:100%; height:100%">
        <div class="text-block">
            <h4><?php echo $json['front_page'][1]['caption']; ?></h4>
            <p><?php echo $json['front_page'][1]['sub']; ?></p>
        </div>
    </div>
    <div class="container4">
        <img src="<?php echo $json['front_page'][2]['img']; ?>" style="width:100%; height:100%">
        <div class="text-block">
            <h4><?php echo $json['front_page'][2]['caption']; ?></h4>
            <p><?php echo $json['front_page'][2]['sub']; ?></p>
        </div>
    </div>

    <div class="nextpoint"> </div>



    <div class="introtext">
        <h3 class="h31">About Me</h3>
        <div class="rectangle"></div>

        <?php
        echo "<p> I'm Yohello from <i>the mythical land of Canada</i>, I know a bit about computers, and stuff. As of now I live I'm in the Eastern Time Zone (-4 GMT, -5 UTC), I'm avaliable  $time, I rarly know what is going on in advanced. I'm not taking job requets no matter who you are, I can redirect you to someone who might be able to. Also I know a bit about how computers work but I'm no expert, I learned <b>All</b> of it online, and self taught. I've learned Cgi and Vfx with Blender, I started programing by learning HTML, then diving straight into C# with Unity, and Python then I took a break for about a year and got back into coding with C, and that is how I got here.";
        ?>
    </div>
    <br>
    <div class="nextpoint"></div>

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
        <img src="<?php echo $cgi ?>">
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
