<?php
//controllers/index.php

function index($f3){
    require_once('setting.php');

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រ​ដើម', 
        'date'=>$setting['date']
    ]);

    $view=new View;
    echo $view->render('ui/index.php');
}