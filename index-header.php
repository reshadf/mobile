<?php

/*
 *  Menu block
 */
    $menu = '';
if (file_exists("index.ini") && is_array($content = parse_ini_file("index.ini", true)))
{
    if (array_key_exists("navigation", $content))
    {
        foreach ($content["navigation"] as $basename => $title)
        {       
            if(isset($_GET['page']) and $_GET['page'] == $basename)

            {
                $class = 'current';
            }
            else
            {
                $class = '';
            }
                $menu .= '<li><a class="' . $class . '" href="index.php?page=' . $basename . '">' . $title . '</a></li>';
        }
    }
}

?>
<!DOCTYPE html>
<!--[if IEMobile 7 ]>    <html class="no-js iem7"> <![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <!-- the line below is required for access to the appMobi JS library -->
<script type="text/javascript" charset="utf-8" src="http://localhost:58888/_appMobi/appmobi.js"></script>

<script type="text/javascript" language="javascript">
        // This event handler is fired once the AppMobi libraries are ready
        function onDeviceReady() {
            //use AppMobi viewport to handle device resolution differences if you want
            //AppMobi.display.useViewport(768,1024);

            //hide splash screen now that our app is ready to run
            AppMobi.device.hideSplashScreen();
        }

        //initial event handler to detect when appMobi is ready to roll
        document.addEventListener("appMobi.device.ready",onDeviceReady,false);
</script> 



        <meta charset="utf-8">
        <title>
            <?php 
   
            if (file_exists("index.ini") && is_array($title = parse_ini_file("index.ini", true)))
            {
                if (array_key_exists("title", $title))
                {
                    foreach ($title["title"] as $basename => $title)
                    {       
                        if(isset($_GET['page']) and $_GET['page'] == $basename)
                        {
                          echo $title;
                        }
                    }
                }

                else
                {
                  echo 'Reshad Farid';
                }
            }
            ?>
        </title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="cleartype" content="on">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="img/touch/apple-touch-icon.png">

        <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
        <!--
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        -->

        <!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
        <!--
        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
        -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.1.min.js"></script>
    </head>
    <body>