<head>

    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>
<?php
  $menu = fopen("menu.html", "r") or die("Can't open da file menu file");
  echo fread($menu, filesize("menu.html"));
  fclose($menu);
  ?>
    <h1>Contact Me</h1>
    <div class="bar">
    </div>

    <div class="email_stuff">
        <h2>Email Me</h2>
        <a href="mailto: @.">
            <h3>Email: @.</h3>
        </a>
        <h4 class="question">When will you be able to contact me?</h4>
        <h4 class="answer">Anytime</h4>
        <h4 class="question">How long do I take to respond to emails?</h4>
        <h4 class="answer">Upto 3 days</h4>
        <h4 class="question">What is the best way to contact me?</h4>
        <h4 class="answer">Through discord, also send me a email</h4>
    </div>
    <div class="other_forms">
        <h2>Other ways to<br>Contact me</h2>
        <h3>Discord: to be added</h3>
        <h3>Phone number: To be added</h3>
    </div>
    <br>
    <!-- <div class="space"></div> 
    idk what to do with this?-->
    <div class="bar"></div>
    <div class="links">
        <p class="links">
            <a href="index.php">Homepage</a><br>
            <a href="Projects/index.php">Projects</a><br><br><br><br><br>
            <a href="sneaky.php" class="hehe"><i>Hehehe</i>></a>
        </p>
    </div>
</body>