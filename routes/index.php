<?php
//routes/index.php

$f3->route('GET /', function($f3) {
    require_once('controllers/index.php');
    index($f3);
});

$f3->route('GET /login', function($f3) {
    if($f3->get('SESSION.email')){
        require_once('controllers/admin/users/checkUser.php');
        checkUser($f3);
    }else{
        require_once('controllers/login.php');
        login($f3);
    }
});

$f3->route('POST /login', function($f3) {
    require_once('controllers/admin/users/checkUser.php');
    checkUser($f3);
});