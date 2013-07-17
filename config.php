<?php

$config = array(
    'database' => array(
        'local' => array(
            'name' => 'ckeditor',
            'host' => '127.0.0.1',
            'user' => '',
            'pass' => ''
        ),
        'production' => array(
            'name' => '',
            'host' => '127.0.0.1',
            'user' => '',
            'pass' => ''
        ),
    ),
);

if($_SERVER['SERVER_ADDR'] == '127.0.0.1') {
    $host = $config['database']['local']['host'];
    $dbName = $config['database']['local']['name'];
    $dbUser = $config['database']['local']['user'];
    $dbPass = $config['database']['local']['pass'];
} else {
    $host = $config['database']['production']['host'];
    $dbName = $config['database']['production']['name'];
    $dbUser = $config['database']['production']['user'];
    $dbPass = $config['database']['production']['pass'];
}

$pdo = new PDO("mysql:host={$host};dbname={$dbName}", $dbUser, $dbPass);