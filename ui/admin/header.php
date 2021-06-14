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
        <link href="ui/styles/admin/partials/header.css" rel="stylesheet"></link>
    </head>
    <body>
    <section class='Header'>
        <div class='wrapper region'>
            <div class='logo'>
                <div class='date'><?php echo $title ?></div>
            </div>
            <form class='search'>
                <input type='text' name='q' required />
                <input type='submit' value='បញ្ជូន' />
            </form>
            <div class='logout'>
                <a href='./'>ទំព័រ​មុខ</a> | <a href='./admin/logout'>ចេញ​ក្រៅ</a>
            </div>
        </div>
    </section>
    <div class='site region'>