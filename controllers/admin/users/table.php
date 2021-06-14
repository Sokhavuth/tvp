<?php
//controllers/admin/users/table.php

function table($kw){
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

    $kw->get('DB')->exec($sql);

    $user = $kw->get('DB')->exec('SELECT * FROM users LIMIT 1');
    
    if(!$user){
        $kw->get('DB')->exec('INSERT INTO users (email, password) VALUES("root@tv.com", "password")');
    }
}