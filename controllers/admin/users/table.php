<?php
//controllers/admin/users/table.php

function table($f3){
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id VARCHAR(250), 
        name VARCHAR(250),
        password VARCHAR(250),
        email VARCHAR(250),
        role VARCHAR(250),
        thumb TEXT,
        info TEXT,
        video TEXT,
        date VARCHAR(250)
    )";

    $f3->get('DB')->exec($sql);

    $user = $f3->get('DB')->exec('SELECT * FROM users LIMIT 1');
    
    if(!$user){
        $f3->get('DB')->exec('INSERT INTO users (email, password) VALUES("xxxx@xxx.xxxx", "xxxxxx")');
    }
}