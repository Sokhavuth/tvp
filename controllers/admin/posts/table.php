<?php
//controllers/admin/posts/table.php

function table($f3){
    $sql = "CREATE TABLE IF NOT EXISTS posts (
        id VARCHAR(250), 
        title VARCHAR(250),
        content TEXT,
        thumb TEXT,
        category TEXT,
        date VARCHAR(250),
        video TEXT,
        author VARCHAR(250)
    )";

    $f3->get('DB')->exec($sql);
}