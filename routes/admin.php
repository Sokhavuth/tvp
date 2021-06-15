<?php
//routes/admin.php

$f3->route('GET /admin', function($f3){
    if($f3->get('SESSION.email')){
        require_once('controllers/admin/index.php');
        index($f3);
    }else{
        $f3->reroute('./login');
    }
});

$f3->route('GET /admin/logout', function($f3){
    $f3->clear('SESSION');
    $f3->reroute('./');
});

$f3->route('GET /admin_post', function($f3){
    if($f3->get('SESSION.email')){
        require_once('controllers/admin/posts/reads.php');
        reads($f3);
    }else{
        $f3->reroute('./login');
    }
});

$f3->route('POST /admin_post', function($f3){
    if($f3->get('SESSION.email')){
        require_once('controllers/admin/posts/create.php');
        create($f3);
    }else{
        $f3->reroute('./login');
    }
});

$f3->route('GET /admin_post_delete/@id', function($f3){
    if($f3->get('SESSION.email')){
        require_once('controllers/admin/posts/delete.php');
        delete($f3, $f3->get('PARAMS.id'));
    }else{
        $f3->reroute('./login');
    }
});