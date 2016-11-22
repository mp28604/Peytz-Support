<?php
session_start();
date_default_timezone_set('Europe/London');
if ($_COOKIE['username'])
{
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cssmenu/styles.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="cssmenu/script.js"></script>
    <title> Peytz Support </title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body class="body">
    <div id='cssmenu'>
    <ul>
        <?
        if (!$_GET[page] || $_GET[page] == "info/index")
        {
            print ('<li class="active"><a href="home.php?page=info/index"><span>Informationer</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=info/index"><span>Informationer</span></a></li>');
        }
        if ($_GET[page] == "passwords/index")
        {
            print ('<li class="active"><a href="home.php?page=passwords/index"><span>Passwords</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=passwords/index"><span>Passwords</span></a></li>');
        }
        if ($_GET[page] == "employees/index")
        {
            print ('<li class="active"><a href="home.php?page=employees/index"><span>Medarbejdere</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=employees/index"><span>Medarbejdere</span></a></li>');
        }
        if ($_GET[page] == "keyformular/index")
        {
            print ('<li class="active"><a href="home.php?page=keyformular/index"><span>N&oslash;gle formular</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=keyformular/index"><span>N&oslash;gle formular</span></a></li>');
        }
        if ($_GET[page] == "hardware/index")
        {
            print ('<li class="active"><a href="home.php?page=hardware/index"><span>Hardware</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=hardware/index"><span>Hardware</span></a></li>');
        }
        if ($_GET[page] == "phone/index")
        {
            print ('<li class="active"><a href="home.php?page=phone/index"><span>Telefonnumre</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=phone/index"><span>Telefonnumre</span></a></li>');
        }
        if ($_GET[page] == "netgear/index")
        {
            print ('<li class="active"><a href="home.php?page=netgear/index"><span>Netgear</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=netgear/index"><span>Netgear</span></a></li>');
        }
        if ($_GET[page] == "jira/index")
        {
            print ('<li class="active"><a href="home.php?page=jira/index"><span>Jira</span></a></li>');
        }
        else
        {
            print ('<li><a href="home.php?page=jira/index"><span>Jira</span></a></li>');
        }
        ?>
    </ul>
    </div>
    <div class="fullscreen-bg">
        <video class="fullscreen-bg__video" id="bgvid" playsinline autoplay muted loop>
            <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
            <!--<source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm">!-->
            <source src="images/bb8.mov" type="video/mp4">
        </video>
    </div>
    <?
    if ($_GET[page] != "")
    {
        include "$_GET[page].php";
    }
    else
    {
        include "info/index.php";
    }
    ?>

    </body>
    </html>
<?
}
else
{
    include "unauthorized.php";
}
?>
