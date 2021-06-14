<?php 
//controllers/admin/posts/create.php

function create($f3){
    require('table.php');
    table($f3);

    $id = uniqid();
    $title = $f3->get('POST.title');
    $content = $f3->get('POST.content');
    $thumb = $f3->get('POST.thumb');
    $category = $f3->get('POST.category');
    $date = $f3->get('POST.datetime');
    $video = $f3->get('POST.entries');
    $author = $f3->get('SESSION.email');

    $db = $f3->get('DB');

    $sql = "INSERT INTO posts (id, title, content, thumb, category, date, video, author) 
    VALUES('$id', '$title', '$content', '$thumb', '$category', '$date', '$video', '$author')";

    $db->exec($sql);

    $f3->reroute('./admin_post');
}