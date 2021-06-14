<?php 
//controllers/admin/posts/reads.php

function reads($f3){
    require_once('setting.php');

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រការផ្សាយ', 
        'date'=>$setting['date']
    ]);

    //$user = $kw->get('DB')->exec('SELECT * FROM posts LIMIT ?', $setting['adminPostLimit']);

    $view = new View;
    echo $view->render('ui/admin/post.php');
}