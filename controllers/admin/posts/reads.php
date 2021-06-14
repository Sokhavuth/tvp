<?php 
//controllers/admin/posts/reads.php

function reads($f3){
    require_once('setting.php');
    $posts = $f3->get('DB')->exec('SELECT * FROM posts LIMIT ?', $setting['adminPostLimit']);

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រការផ្សាយ', 
        'date'=>$setting['date'],
        'items'=>$posts,
        'message'=>'ចំនួន​ការផ្សាយ​សរុបៈ '.count($posts),
        'route'=>'post'
    ]);

    $view = new View;
    echo $view->render('ui/admin/post.php');
}