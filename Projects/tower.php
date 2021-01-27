<head>
    <title>Tower</title>
    <link rel="stylesheet" href="tower.css">
</head>

<body>

<?php
#images
$img1 = "../Images/Tower.jpg";
$img2 = "Pictures/Towerhead.jpg";
$img2_5 = "Pictures/Lookingup.jpg";
$img3 = "Pictures/final.png";

#Words
$words1 = "Because I was bored";
$words1img = "Pictures/Lookingup.jpg";
$words2 = "By using Blender and love";
$words2img = "Pictures/Towerhead.jpg";
$words3 = "I was bored and thought of a castle";
$words3img = "Pictures/Towerwire.jpg";

#Specifics
$specifics= file_get_contents('Towerr/Specifics.txt');
?>


    <div class="img1">
        <img src="<?php echo $img1?>">
    </div>
    <div class="img2">
        <img src="<?php echo $img2?>">
    </div>
    <div class="img2">
        <img src="<?php echo $img2_5?>">
    </div>
    <div class="img3">
<img src="<?php echo $img3?>">

    </div>
    <div class="title">
        <br>
        <br>
        <br>
        <h1>Tower Defense</h1>
    </div>

    <div class="nextpoint"></div>
    <div class="Why">
        <h2>Why did I make this?</h2>
        <div class="talky">
        <p><?php echo $words1 ?></p>
        </div>
    </div>
        <div class="whyimg">

        <img src="<?php echo $words1img ?>">
    </div>




    <div class="nextpoint"></div>
    <div class="How">
        <h2>How did I make this?</h2>
        <div class="talky">
        <p><?php echo $words2 ?></p>
    </div>
    </div>
    <div class="whyimg">
        <img src="<?php echo $words2img ?>">
    </div>






    <div class="nextpoint"></div>
    <div class="Why">
        <h2>Why did I make this?</h2>
        <div class="talky">
        <p><?php echo $words3 ?></p>
        </div>
    </div>
    <div class="howimg">
        <img src="<?php echo $words3img ?>">
    </div>






    <div class="break">
    </div>

    <div class="explain">
        <h3>Specifics about the project</h3>
        <p>65,997 verts <br> 41 Objects <br> 127,869 edges <br> 61,867 Faces<br> 15hr Simulation time <br> 1hr render time</p>
    </div>

    <div class="download_and_video">
        <h3> Can I download the file? Where can I watch a video of it?</h3>
        <p> You cannot download it right now, in the future I may put the file out to be downloaded</p>
        <p>I will add in the video at a later time</p>
    </div>

</body>