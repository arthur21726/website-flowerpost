<!DOCTYPE html>
<html>

<head>
    <title>flowerpot inc.</title>

    <!-- font lato -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300&display=swap" rel="stylesheet">

   	<!---スタイルシート-->
       <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <meta charset="utf-8" />
             	
<?php wp_head(); ?>

</head>

<body>

    <!-- <div id="jsloader">
        <div class="loader"><img src="images/rings.svg" alt=""></div>
    </div> -->

    <div class="wrapper">
        <header>
            <div class="logo"><a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_flowerpost.png" alt=""></a></div>
            <ul class="navi">
                <li><a href="about.html">about</a></li>
                <li>people</li>
                <li>contact</li>
            </ul>
        </header>