<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/Message.php';

$Message = new Message;

$message = $_POST['data'];
$Message->createMessage($message, $pdo);
