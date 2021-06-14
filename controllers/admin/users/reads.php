<?php 
//controllers/admin/users/read.php

function reads($kw){
    require_once('setting.php');

    $kw->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រអ្នក​ប្រើប្រាស់', 
        'date'=>$setting['date']
    ]);

    $user = $kw->get('DB')->exec('SELECT * FROM users LIMIT ?', $setting['adminPostLimit']);

    $view = new View;
    echo $view->render('views/admin/user.php');
}