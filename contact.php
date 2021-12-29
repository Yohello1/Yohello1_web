<head>

    <link rel="stylesheet" href="contact.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>
    <?php
    $doc = $_SERVER['DOCUMENT_ROOT'];
    $menu .= $doc . "/menu.php";
        echo $menu;
    require $menu;
    ?>
    <h1>Contact Me</h1>

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
        <h3>Discord: YOHWLLO#9962</h3>
        <h3>Phone number: To be added</h3>
    </div>
</body>