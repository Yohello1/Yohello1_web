<style>
    .bar {
        top: 0%;
        left: 0%;
        right: 0%;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.876);
        position: fixed;
        width: 100%;
        display: inline;
        z-index: 0;
    }

    .nav_bar_home {
        text-align: left;
        font-family: Firacode;
        font-size: 30px;
        line-height: 0%;
        margin-top: 0%;
        padding-top: 25px;
        padding-left: 10px;
        font-weight: 300;
        color: black;
        display: inline-block;
        z-index: auto;

    }

    .nav_bar_areas {
        text-align: left;
        font-family: Firacode;
        font-size: 30px;
        line-height: 0%;
        margin-top: 0%;
        font-weight: 400;
        padding-top: 25px;
        padding-left: 10px;
        color: black;
        display: inline-block;
        z-index: auto;

    }

    .line {
        display: inline-block;
        border-left: 4px solid black;
        position: relative;
        bottom: -5px;
        height: 30px;
        z-index: auto;

    }

    h6 {
        color: black;
    }
</style>
<?php
echo "HELLO";
?>
<div class="bar">
    <a href="/">
        <h6 class="nav_bar_home">Home</h6>
    </a>
    <div class="line"></div>
    <a href="/Projects/">
        <h6 class="nav_bar_areas">Projects</h6>
    </a>
    <div class="line"></div>
    <a href="/intro.php">
        <h6 class="nav_bar_areas">About Me</h6>
    </a>
    <div class="line"></div>
    <a href="/contact.php">
        <h6 class="nav_bar_areas">Contact Me</h6>
    </a>
</div>