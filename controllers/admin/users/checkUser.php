<?php
//controllers/login_post.php

function checkUser($f3){
    require_once 'setting.php';

    $f3->mset([
        'appName'=>$setting['siteTitle'], 
        'title'=>'ទំព័រ​គ្រប់គ្រង', 
        'date'=>$setting['date'],
        'message'=>$setting['message']
    ]);

    if($f3->get('SESSION.email')){
        $view = new View;
        echo $view->render('ui/admin/index.php');
    }else{
        $sql = 'SELECT email FROM users WHERE email="'.$f3->get('POST.email').'"';
        $email = $f3->get('DB')->exec($sql);
        
        if($email){
            $sql = 'SELECT password FROM users WHERE password="'.$f3->get('POST.password').'"';
            $password = $f3->get('DB')->exec($sql);
            if($password){
                $f3->set('SESSION.email', $email[0]['email']);

                $view = new View;
                echo $view->render('ui/admin/index.php');
            }else{
                $f3->set('message', 'ពាក្យ​សំងាត់​មិនត្រឹមត្រូវ​ទេ');
                $view = new View;
                echo $view->render('ui/login.php');
            }
        }else{
            $f3->set('message', 'Email ​មិនត្រឹមត្រូវ​ទេ');
            $view = new View;
            echo $view->render('ui/login.php');
        }
    }
    
}