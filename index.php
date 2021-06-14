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

$db = new DB\SQL(
    'mysql:host='.$cleardb_host.';port=3306;dbname='.$cleardb_db, 
    $cleardb_username, 
    $cleardb_password,
    [\PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8;']
);

$f3->set('DB', $db);

require_once('routes/index.php');
require_once('routes/admin.php');

$f3->run();