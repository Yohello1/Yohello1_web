<head>

    <meta charset="UTF-8">

    <title>Yohello</title>
    <link rel="stylesheet" href="indexx.css">
</head>

<?php
$name = "Yohello";
$time = "not avaliable during this time";
$jobs = "no jobs";
$code = "Images\code.jpg";
$cgi = "Images\Cannonshooting.jpg";

$verticalimg = "Images\Tower.jpg";
$verticalcaption = "OH NO IT'S A TOWER";
$verticalsub = "FIRE THE CANNONS";

$toprightcaption = "A Galaxy I think?";
$toprightimg = "Images/untitled17.jpg";
$toprightsub = "In a galaxy far far away";

$bottomleftcaption = "CODY";
$bottomleftimg = "Images/code.jpg";
$bottomleftsub = "Nice code ya got there";
?>




<body>
    <div class="start">
        <br>
        <br>
        <br>
        <h1>Yohello</h1>
        <br>
        <br>
        <br>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">

        <div class="left-col">
            <h2><a href="#Projects"><u>Projects</u></a></h2>

        </div>

        <div class="center-col">

            <h2><a href="fullintroduction.html">About me</a></h2>

        </div>

        <div class="right-col">

            <h2><a href="#Contact-info">Contact Me</a></h2>
        </div>

    </div>

    <br>
    <br>
    <br>
    <div class="container2">
        <a href="fullintroduction.html">
            <img src="<?php echo $verticalimg; ?>" style="width:100%; height:100%">
            <div class="text-block">
                <h4><?php echo $verticalcaption; ?></h4>
                <p><?php echo $vertisub; ?></p>
            </div>
        </a>
    </div>
    <div class="container3">
        <img src="<?php echo $toprightimg; ?>" style="width:100%; height:100%">
        <div class="text-block">
            <h4><?php echo $toprightcaption; ?></h4>
            <p><?php echo $toprightsub; ?></p>
        </div>
    </div>
    <div class="container4">
        <img src="<?php echo $bottomleftimg; ?>" style="width:100%; height:100%">
        <div class="text-block">
            <h4><?php echo $bottomleftcaption; ?></h4>
            <p><?php echo $bottomleftsub; ?></p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h3 class="h31">About Me</h3>
    <div class="rectangle"></div>
    <div class="introtext">
<?php
echo "<p> I'm Yohello from <i>the mythical land of Canada</i>, I know a bit about computers, and stuff. As of now I live I'm in the Eastern Time Zone (-4 GMT, -5 UTC), I'm avaliable  $time, I rarly know what is going on in advanced. I'm not taking job requets no matter who you are, I can redirect you to someone who might be able to. Also I know a bit about how computers work but I'm no expert, I learned <b>All</b> of it online, and self taught. I've learned Cgi and Vfx with Blender, I started programing by learning HTML, then diving straight into C# with Unity, and Python then I took a break for about a year and got back into coding with C, and that is how I got here.";
?>
    </div>
    <br>
    <div class="nextpoint">


    </div>
    <div class="cgivfxtext">
        <h3>Cgi and Vfx</h3>
        <div class="rectangle2"></div>
        <p>I'm always working on some sort of cgi/vfx, this is my latest project involving fire,hardsurface,rigidbody, and so much more. <br> <a href="Projects/Visualfx.html"> To learn more about this project</a> <br> <a href="Projects/Projecthomepage.html">Projects in general</a>
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
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="nextpoint">

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
    <br>
    <br>
    <br>

</body>