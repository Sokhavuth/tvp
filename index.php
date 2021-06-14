<?php

// Kickstart the framework
require 'vendor/autoload.php';
$f3 = \Base::instance();

session_start();

require('tool.php');
$tool = new Tool();
$localhost = $tool->is_localhost();

if($localhost){
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $cleardb_host = $_ENV["HOST"];
    $cleardb_username = $_ENV["USERNAME"];
    $cleardb_password = $_ENV["PASSWORD"];
    $cleardb_db = $_ENV["DATABASE"];
}else{
    $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_host = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
}

require_once('routes/index.php');
require_once('routes/admin.php');

$f3->run();