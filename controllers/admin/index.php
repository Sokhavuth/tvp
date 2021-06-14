<?php
//controllers/home.php

function index($f3){
    require_once('setting.php');

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រគ្រប់គ្រង', 
        'date'=>$setting['date']
    ]);

    $view=new View;
    echo $view->render('ui/admin/index.php');
}