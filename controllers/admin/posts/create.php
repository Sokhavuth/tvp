<?php 
//controllers/admin/posts/create.php

function create($f3){
    require('table.php');
    table($f3);

    $id = uniqid();
    $title = addslashes($f3->get('POST.title'));
    $content = addslashes($f3->get('POST.content'));
    $thumb = addslashes($f3->get('POST.thumb'));
    $category = addslashes($f3->get('POST.category'));
    $date = addslashes($f3->get('POST.datetime'));
    $video = addslashes($f3->get('POST.entries'));
    $author = addslashes($f3->get('SESSION.email'));

    $db = $f3->get('DB');

    $sql = "INSERT INTO posts (id, title, content, thumb, category, date, video, author) 
    VALUES('$id', '$title', '$content', '$thumb', '$category', '$date', '$video', '$author')";

    $db->exec($sql);

    $f3->reroute('./admin_post');
}