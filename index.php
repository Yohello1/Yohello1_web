<!DOCTYPE html>

<head>

    <meta charset="UTF-8">

    <title>Yohwllo</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/hack-font@3.3.0/build/web/hack.min.css">
    <link rel="stylesheet" href="components/base.css">
    <link rel="stylesheet" href="components/banner.css">

</head>

<style>


    a{
        color:white;
    }

/* Blog Code */

    .left_header_three {
        background-color: #FFFFFF;
        position: relative;
        width: 95%;
        height: 150px;
        top: 0px;
        left: 50%;
        float:left;
        transform: translate(-50%, -280px);
        margin-right: 10px;
    }

   .left_header_four {
        background-color: #A2A2A2;
        position: relative;
        width: 95%;
        height: 150px;
        top: 10px;
        left: 50%;
        transform: translate(-50%, -280px);
        margin-left: 10px;
    }

    
    .left_header_five {
        background-color: #FFFFFF;
        position: relative;
        width: 95%;
        height: 150px;
        top: 0px;
        left: 50%;
        float:left;
        transform: translate(-50%, -280px);
        margin-right: 10px;
    }

    .left_header_six {
        background-color: #A2A2A2;
        position: relative;
        width: 95%;
        height: 150px;
        top: 10px;
        left: 50%;
        transform: translate(-50%, -280px);
        margin-left: 10px;
    }
    
    .left_blog {

        position:relative;
        width:350px;
        height:140px;
        top:10px;
        margin-left: 20px;
        transform: translate(0, -450px);
    }

    .left_blog_links {

        position:relative;
        width:350px;
        height:140px;
        top:-470px;
        margin-left: 20px;
        transform: translate(0, -450px);
    }
    
/* Pictures css code */
    .left_header_five {
        background-color: #FFFFFF;
        position: relative;
        width: 95%;
        height: 500px;
        top: 0px;
        left: 50%;
        float:left;
        transform: translate(-50%, -410px);
        margin-right: 10px;
    }

    .left_header_six {
        background-color: #A2A2A2;
        position: relative;
        width: 95%;
        height: 500px;
        top: 10px;
        left: 50%;
        transform: translate(-50%, -410px);
        margin-left: 10px;
    }

    .left_pictures {
        background-color: #880088;
        position:relative;
        width:350px;
        height:490px;
        top:10px;
        margin-left: 18px;
        transform: translate(0, -930px);
    }

/*Projects tab*/
    .right_header_one
    {
        background-color: #FFFFFF;
        position: relative;
        width: 95%;
        height: 500px;
        top: 0px;
        right: 50%;
        float: right;
        transform: translate(+50%, 0px);
    }

    .right_header_two
    {
        background-color: #A2A2A2;
        position: relative;
        width: 95%;
        height: 500px;
        top: 10px;
        left: 50%;
        transform: translate(-50%, 0px);
        margin-left: 10px;
    }

    .right_projects {
        background-color: #880088;
        position:relative;
        width:350px;
        height:490px;
        top:10px;
        margin-left: 18px;
        transform: translate(0, -519px);
    }



/* updates and changes */
    .right_header_three
    {
        background-color: #FFFFFF;
        position: relative;
        width: 95%;
        height: 500px;
        top: 0px;
        right: 50%;
        float: right;
        transform: translate(+50%, -485px);
    }

    .right_header_four
    {
        background-color: #A2A2A2;
        position: relative;
        width: 95%;
        height: 500px;
        top: 10px;
        left: 50%;
        transform: translate(-50%, -485px);
        margin-left: 10px;
    }

    .right_update{
        background-color: #880088;
        position:relative;
        width:350px;
        height:490px;
        top:10px;
        margin-left: 18px;
        transform: translate(0, -1003px);
    }


/* Profile */
    .profile_pfp_icon {
        width:  125px;
        height: 125px;
        border-radius: 50%;
        overflow: hidden;
        line-height: 0%;
        float: left;
        position: relative;
        padding-left: 25px;
        padding-right: 25px;
        padding-top:   5px;
        padding-bottom: 0px;
    }


/* Stars */

@keyframes animateBg {
    0%,100%
    {
        transform:scale(1);
    }
    50%
    {
        transform:scale(1.2);
    }
}

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


.star:nth-child(1){
    top: 100px;
    right: 0px;
    left:initial;
    animation-delay:0 ;
    animation-duration: 1s;
}

.star:nth-child(2){
    top: 150px;
    right: 0px;
    left:initial;
    animation-delay:0.2s;
    animation-duration: 3s;
}

.star:nth-child(3){
    top: 175px;
    right: 0px;
    left:initial;
    animation-delay:0.4s ;
    animation-duration: 2s;
}

.star:nth-child(4){
    top: 2500px;
    right: 0px;
    left:initial;
    animation-delay:0.6s;
    animation-duration: 1.5s;
}

.star:nth-child(5){
    top: 300px;
    right: 0px;
    left:initial;
    animation-delay:0.8s;
    animation-duration: 2.5s;
}

.star:nth-child(6){
    top: 350px;
    right: 0px;
    left:initial;
    animation-delay:1s ;
    animation-duration: 3s;
}
.star:nth-child(7 ){
    top: 475px;
    right: 0px;
    left:initial;
    animation-delay:1s ;
    animation-duration: 1.75s;
}

.star:nth-child(8){
    top: 525px;
    right: 0px;
    left:initial;
    animation-delay:1.4s ;
    animation-duration: 1.25s;
}

.star:nth-child(9){
    top: 0px;
    right: 600px;
    left:initial;
    animation-delay:0.75s ;
    animation-duration: 2.25s;
}

.star:nth-child(10){
    top: 800px;
    right: 0px;
    left:initial;
    animation-delay:2.75s ;
    animation-duration: 2.25s;
}

.star:nth-child(11){
    top: 0px;
    right: 200px;
    left:initial;
    animation-delay:2.35s ;
    animation-duration: 2.25s;
}

.star:nth-child(12){
    top: 0px;
    right: 500px;
    left:initial;
    animation-delay:2.15s ;
    animation-duration: 2.25s;
}


.star:nth-child(13){
    top: 0px;
    right: 125px;
    left:initial;
    animation-delay:1.85s ;
    animation-duration: 2.25s;
}

.star:nth-child(14){
    top: 0px;
    right: 355px;
    left:initial;
    animation-delay:1.35s ;
    animation-duration: 2.15s;
}

.star:nth-child(15){
    top: 0px;
    right: 425px;
    left:initial;
    animation-delay:0.22s ;
    animation-duration: 3.25s;
}

.star:nth-child(16){
    top: 0px;
    right: 295px;
    left:initial;
    animation-delay:1.55s ;
    animation-duration: 2.65s;
}

.star:nth-child(17){
    top: 0px;
    right: 605px;
    left:initial;
    animation-delay:1.85s ;
    animation-duration: 2.25s;
}



</style>

<body style="background-image:url('images/background.png'); font-family: Hack, monospace">
    <!-- <p> Hello there </p> -->
    <div class="wrapper" >

      <div class="banner_bloc">
        <div class="header_one"></div>
        <div class="header_two"></div>
        <div class="header_three">
          <h1 class="text_title">
            My Waste Of Space
          </h1>
          <h2 class="left_top_title">
            [insert domain]
          </h2>
          <h2 class="left_bot_title">
            I got bored
          </h2>
          <img class="pfp_icon" src="images/pfp.webp">

          <h4 class="contact_info_banner"><a href="/index.html">Home</a> | yohwllo | s23adhik@csclub.uwaterloo.ca </h4>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


     <div class="left_side">
        <div class="left_header_one"></div>
        <div class="left_header_two"></div>
        <div class="left_inside">
            <h3>       </h3>
            <img class="profile_pfp_icon" src="images/pfp.webp">
            
            <h3> Profile </h3>
            <p style="padding-left:5px;padding-right:5px;font-size:14px">
Welcome to my little corner of the web! I am Yohwllo, otherwise known as Siracha Sauce. I program quite a bit, sometimes play video games. Contrary to popular belif, I sleep A lot, like half my day? I like working on random stupid projects, I wanna learn more :D. <br>
I'm also a student at the University of Waterloo, I was the prez of the cs club           </p>
        </div>


        <div class="left_header_three"></div>
        <div class="left_header_four"></div>
        <div class="left_blog">
            <h3>Blog updates</h3>

<?php
$directory = './myPosts/'; // Change this to your target directory

$files = scandir($directory);
foreach ($files as $file) {
    // Skip current and parent directory entries
    if ($file === '.' || $file === '..') continue;

    // Full path
    $path = $directory . $file;

    // Only link to files (not directories)
    if (is_file($path)) {
        echo '<a href="' . htmlspecialchars($path) . '">' . htmlspecialchars($file) . '</a><br>';
    }
}
?>


        </div>

        <div class="left_header_five"></div>
        <div class="left_header_six"></div>
        <div class="left_blog_links">
            <h3>Links</h3>
            <p style="padding-left:5px;padding-right:5px;">
                I don't want the cool parts of the internet to die, and wither away, infact I want more people to know of the cool parts. So I've decided to make a links section here, where I link to cool websites I find :D
                '</p>
            <a href="csclub.ca"> CSClub, I was the pres of </a><br>
            <a href="https://eater.net/boids"> Boids demo </a><br>
            <a href="https://syed.world/"> Old friend's website </a><br>
            <a href="https://cubityfir.st/"> This website has a cool effect </a><br>
            <a href="http://provethatyouarenotarobot.com/"> Really fun gam(?) </a><br>
            <a href="https://dundeezhang.com/"> My office manager's website</a><br>
            <a href="https://smartineau.me/"> This person is better at robotics than they think</a><br>
            <a href="https://woojiahao.com/"> I don't know how I met them, but here they are</a><br>
            <a href="https://cs.uwaterloo.ca/~c2batty/"> A cool person I went to lunch with </a><br>
            <a href="https://math.uwaterloo.ca/~lwmarcou/"> A cool professors website </a><br>
            <a href="https://laifrank2002.github.io/"> Valeries webpage </a><br>
            <a href="https://github.com/Equilibris"> Williams github </a><br>

        </div>

     </div>




        <div class="right_side">
            <div class="right_header_one"></div>
            <div class="right_header_two"></div>
            <div class ="right_projects">
                <h3>Projects</h3>

                <a href="https://github.com/Yohello1/idk-what-name/tree/main/jeux-video"> Game Engine </a> <br>
                <a href="https://github.com/Yohello1/wild-space-3"> Wild Space 3 Patched  </a> <br>
                <a href="https://github.com/Yohello1/Yohello1_web"> Website </a> <br>
                <a href="https://github.com/Yohello1/neso"> Operating System </a> <br>
                <a href="publicKeys/csc.pub"> Public ssh key (csc) </a> <br>
            </div>



            <div class="right_header_three"></div>
            <div class="right_header_four"></div>
            <div class ="right_update">
                <h3>Badges!</h3>
                <br>
                <a href="."><img src="images/badge.png" alt="My Badge!"></a>

                <a href="https://hexadecimaldinosaur.com/"><img src="https://hexadecimaldinosaur.com/static/button.gif" alt="Ivys badge!"></a>
                <a href="https://hyperneutrino.xyz/"><img src="https://hyperneutrino.xyz/badge.png" alt="Iriss badge!"></a>
                    <a href="https://www.zerotiger.ca/
/"><img src="https://www.zerotiger.ca/eighteightthreeone/zerotiger.gif" alt="Tiger's badge!"></a>
                    <a href="https://dundeezhang.com/"><img src="https://dundeezhang.com/badges/dundeezhang.gif" alt="Tiger's badge!"></a>
            </div>
        </div>
     </div>


     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
     <span class="star"></span>
</body>
