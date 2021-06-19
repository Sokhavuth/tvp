<?php
//controllers/admin/posts/edit.php

function edit($f3, $id){
    require_once('setting.php');
    $sql = "SELECT * FROM posts WHERE id=?";
    $post = $f3->get('DB')->exec($sql, $id);

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រកែប្រែ', 
        'post'=>$post
    ]);

    $view = new View;
    echo $view->render('ui/admin/post_edit.php');
}