<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> <?php echo $appName." - ".$title; ?></title>
        <script src="ui/scripts/jQuery.js"></script>
        <link href="ui/fonts/setup.css" rel="stylesheet" ></link>
        <link href="ui/images/site_logo.png" rel="icon" ></link>
        <link href="ui/styles/global.css" rel="stylesheet"></link>
        <link href="ui/styles/partials/header.css" rel="stylesheet"></link>
    </head>
    <body>
    <section class='Header'>
        <div class='wrapper region'>
            <div class='datetime'>
                <div class='date'><?php echo $date ?></div>
                <div class='time' id='kh-clock'>ពេល​ម៉ោង</div>
            </div>
            <div class='title'>
                <a href="./"><?php echo $appName ?></a>
                <div class='description'>ព័ត៌មាន ចំណេះ​ដឹង វប្បធម៌ កំសាន្ត</div>
            </div>
            <form class='search'>
                <input type='text' name='q' placeholder='Search' />
                <input type='submit' value='ស្វែង​រក' />
            </form>
        </div>
    </section>
    
    <script src='ui/scripts/partials/header.js'></script>

    <?php require('menu.php') ?>

    <div class='site region'>